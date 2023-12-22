<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    //
    public function showCartList(): View
    {
        $cartItems = CartItem::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('website.cartlist', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');

        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $user_id = auth()->id();
        if (!$user_id) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        do {
            $cartItem_id = $this->generateCartItemId();
        } while (CartItem::where('cartItem_id', $cartItem_id)->exists());

        try {
            $cartItem = new CartItem([
                'cartItem_id' => $cartItem_id,
                'user_id' => $user_id,
                'product_id' => $product->product_id,
                'quantity' => 1,
                'subtotal' => $product->price,
            ]);

            $cartItem->save();

            return response()->json(['message' => 'Product added to cart successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error saving to the database'], 500);
        }
    }

    public function updateCart(Request $request)
    {
        $cartItemId = $request->input('cartItem_id');
        $quantity = $request->input('quantity');

        $cartItem = CartItem::find($cartItemId);

        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->subtotal = $cartItem->product->price * $quantity;

            $subtotal =  $cartItem->subtotal;
            $subtotal = number_format($subtotal, 2, '.', '');
            $cartItem->save();
        }
        return response()->json(['update_subtotal' => $subtotal]);
    }

    public function removeFromCart(Request $request)
    {
        $cartItemId = $request->input('cartItem_id');

        $cartItem = CartItem::find($cartItemId);

        if ($cartItem) {
            $cartItem->delete();

            return response()->json(['message' => 'Cart item removed from cart successfully']);
        }

        return response()->json(['message' => 'Cart item not found in the cart'], 404);
    }

    public function showCartPaymentPage(Request $request)
    {
        $cartItemIds = explode(',', $request->input('cartItemIds'));
        $selectedCartItems = CartItem::whereIn('cartItem_id', $cartItemIds)->get();
        $subtotal = 0;
        foreach ($selectedCartItems as $cartItem) {
            $mainImage = ProductImage::where('product_id', $cartItem->product->product_id)
                ->where('is_main', 1)
                ->first();

            $cartItem->product->mainImage = $mainImage;
            $subtotal += $cartItem->quantity * ($cartItem->product->price ?? 0);
            $subtotal = number_format($subtotal, 2, '.', '');
        }

        return view('website.order_process.cart_payment', [
            'selectedCartItems' => $selectedCartItems,
            'subtotal' => $subtotal,
        ]);
    }

    public function submitCartOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'cartItemIds' => 'required|array',
            'selected_payment_method' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $payment_method = $request->input('selected_payment_method');
            $cartItemIds = $request->input('cartItemIds');
            Log::info('Submitted Cart Item IDs: ' . implode(',', $cartItemIds));

            $selectedCartItems = CartItem::whereIn('cartItem_id', $cartItemIds)->get();

            foreach ($selectedCartItems as $cartItem) {
                $mainImage = ProductImage::where('product_id', $cartItem->product->product_id)
                    ->where('is_main', 1)
                    ->first();
                $cartItem->product->mainImage = $mainImage;
            }

            $subtotal = 0;
            $quantity = 0;
            foreach ($selectedCartItems as $cartItem) {
                $subtotal += $cartItem->quantity * ($cartItem->product->price ?? 0);
                $quantity += $cartItem->quantity;
            }

            do {
                $order_id = $this->generateOrderId();
            } while (Order::where('order_id', $order_id)->exists());

            // Save the order to the database
            $order = Order::create([
                'order_id' => $order_id,
                'user_id' => auth()->id(),
                'product_id' => '',
                'cartItem_id' => implode(',', $cartItemIds),
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
                'transaction_id' => '',
            ]);

            if ($payment_method === 'Pay in store') {
                return redirect()->route('home.show')->with('success', 'Order placed successfully!');
            } elseif ($payment_method === 'MoMo') {
                return redirect()->route('momo.payment', ['order_id' => $order_id, 'subtotal' => $subtotal]);
            }
        } catch (\Exception $e) {
            Log::error('Exception in submitCartOrder: ' . $e->getMessage());

            return redirect()->back()->withErrors(['error' => 'An error occurred while processing your order. Please try again later.']);
        }
    }

    private function generateCartItemId(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $cartItem_id = '';
        for ($i = 0; $i < 6; $i++) {
            $cartItem_id .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $cartItem_id;
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
