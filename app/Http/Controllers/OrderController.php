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
            $subtotal = number_format($subtotal, 2, '.', '');
        }

        return response()->json(['update_subtotal' => $subtotal]);
    }
    public function submitOrder(Request $request)
    {

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
            $productId = $request->input('product_id');
            $quantity = $request->input('quantity');
            $subtotal = $request->input('subtotal');
            $payment_method = $request->input('selected_payment_method');

            Log::info('Payment Method: ' . $payment_method);

            do {
                $order_id = $this->generateOrderId();
            } while (Order::where('order_id', $order_id)->exists());

            $order = Order::create([
                'order_id' => $order_id,
                'product_id' => $productId,
                'user_id' => auth()->id(),
                'transaction_id' => '',
                'cartItem_id' => '',
                'quantity' => $quantity,
                'status' => 'Pending',
                'payment_status' => 'Unpaid',
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
            if ($payment_method === 'Pay in store') {
                return redirect()->route('home.show')->with('success', 'Order placed successfully!');
            } elseif ($payment_method === 'MoMo') {
                return redirect()->route('momo.payment', ['order_id' => $order_id, 'subtotal' => $subtotal]);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    private function generateOrderId(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $order_id = '';
        for ($i = 0; $i < 6; $i++) {
            $order_id .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $order_id;
    }
    public function showPreorderPage(Request $request, $id): View
    {
        //$quantity = $request->query('quantity', 1);

        $product = Product::with('images')->find($id);
        $mainImage = ProductImage::where('product_id', $id)
            ->where('is_main', 1)
            ->first();

        if ($product) {
            $subtotal = $product->price;
            $subtotal = number_format($subtotal, 2, '.', '');
        }
        return view('website.order_process.preorder', compact('product', 'mainImage', 'subtotal'));
    }

    public function submitPreorder(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'product_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(back())
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $productId = $request->input('product_id');
            $subtotal = $request->input('subtotal');

            do {
                $order_id = $this->generateOrderId();
            } while (Order::where('order_id', $order_id)->exists());

            $order = Order::create([
                'order_id' => $order_id,
                'product_id' => $productId,
                'user_id' => auth()->id(),
                'transaction_id' => '',
                'cartItem_id' => '',
                'quantity' => 1,
                'status' => 'Pre-Order',
                'payment_status' => 'Unpaid',
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
                'payment_method' => '',
            ]);
            return redirect()->route('preorder.success')->with('success', 'Pre-Order successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function showPreorderSuccess(): View
    {
        return view('website.order_process.modal_preorder_successful');
    }
    public function showPaymentSuccess(): View
    {
        return view('website.payment_process.payment_success');
    }

    public function showPaymentError(): View
    {
        return view('website.payment_process.payment_error');
    }
}
