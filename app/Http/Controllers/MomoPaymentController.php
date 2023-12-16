<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MomoPaymentController extends Controller
{
    private $ch; // Add this line to declare $ch as a class property

    public function execPostRequest($url, $data)
    {
        $this->ch = curl_init($url); // Update $ch to $this->ch
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt(
            $this->ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($this->ch);
        //close connection
        curl_close($this->ch);
        return $result;
    }

    public function makePayment(Request $request)
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $amount = $request->input('subtotal') * 25000;

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "E-lec World - Thanh toán qua MoMo";
        // $amount = "$amount";
        $orderId = $request->input('order_id');
        $redirectUrl = "http://127.0.0.1:8000/";
        $ipnUrl = "http://127.0.0.1:8000/";
        $extraData = "";


        $requestId = time() . "";
        $requestType = "captureWallet";
        //$extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );

        $result = $this->execPostRequest($endpoint, json_encode($data));

        if ($result === false) {
            echo 'Curl error: ' . curl_error($this->ch);
        } else {
            // dd($result);  // Debugging output
            $jsonResult = json_decode($result, true);

            $order = Order::find($orderId);
            if ($jsonResult['message'] == "Thành công.") {
                $order->status = "paid";
                $order->transaction_id = $jsonResult['responseTime'];
                $order->save();
            }

            // Just an example, please check more in there
            return redirect()->to($jsonResult['payUrl']);
        }
    }
}
