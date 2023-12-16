<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //
    public function showCheckout($id)
    {
        $product = Product::with('images')->find($id);
        $mainImage = ProductImage::where('product_id', $id)
            ->where('is_main', 1)
            ->first();


        return view('website.order_process.product_checkout', compact('product', 'mainImage'));
    }

    public function showPaymentPage(Request $request, $id)
    {
        $quantity = $request->query('quantity', 1);

        $product = Product::with('images')->find($id);
        $mainImage = ProductImage::where('product_id', $id)
            ->where('is_main', 1)
            ->first();

        if ($product) {
            $subtotal = $product->price * $quantity;
            // Định dạng $subtotal với định dạng decimal(10,2)
            $subtotal = number_format($subtotal, 2, '.', '');
        }
        return view('website.order_process.product_payment', compact('product', 'mainImage', 'quantity', 'subtotal'));
    }

    public function updateQuantity(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        $product = Product::find($productId);


        if ($product) {
            $subtotal = $product->price * $quantity;
            // Định dạng $subtotal với định dạng decimal(10,2)
            $subtotal = number_format($subtotal, 2, '.', '');
        }

        return response()->json(['update_subtotal' => $subtotal]);
    }
    public function submitOrder(Request $request)
    {

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'product_id' => 'required',
            'subtotal' => 'required',
            'quantity' => 'required',
            'selected_payment_method' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(back())
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Other data needed for the order
            $productId = $request->input('product_id');
            $quantity = $request->input('quantity');
            $subtotal = $request->input('subtotal');
            $payment_method = $request->input('selected_payment_method');

            Log::info('Payment Method: ' . $payment_method);

            do {
                $order_id = $this->generateOrderId();
            } while (Order::where('order_id', $order_id)->exists());

            // Save the order to the database
            $order = Order::create([
                'order_id' => $order_id,
                'product_id' => $productId,
                'user_id' => auth()->id(),
                'transaction_id' => '',
                'cartItem_id' => '',
                'quantity' => $quantity,
                'status' => 'pending',
                'subtotal' => $subtotal,
                'shipping' => 0,
                'total' => $subtotal,
                'promo' => 0,
                'discount' => 0,
                'fullname' => $request->input('fullname'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'street_address' => $request->input('street_address'),
                'number_address' => $request->input('number_address'),
                'city' => $request->input('city'),
                'province' => '',
                'payment_method' => $payment_method,
            ]);
            // Redirect based on payment method
            if ($payment_method === 'Pay in store') {
                return redirect()->route('home.show');
            } elseif ($payment_method === 'MoMo') {
                return redirect()->route('momo.payment', ['order_id' => $order_id, 'subtotal' => $subtotal]);
            }
        } catch (\Exception $e) {
            // Nếu có lỗi, quay trở lại form với thông báo lỗi
            dd($e->getMessage());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    private function generateOrderId(): string
    {
        // Tạo một chuỗi ngẫu nhiên có chiều dài 6 kí tự (bao gồm số, chữ, kí tự đặc biệt)
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $order_id = '';
        for ($i = 0; $i < 6; $i++) {
            $order_id .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $order_id;
    }
}
