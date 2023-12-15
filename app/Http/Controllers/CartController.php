<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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

    private function generateCartItemId(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $cartItem_id = '';
        for ($i = 0; $i < 6; $i++) {
            $cartItem_id .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $cartItem_id;
    }
}
