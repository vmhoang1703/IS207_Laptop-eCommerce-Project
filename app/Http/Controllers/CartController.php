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
        $cartItems = CartItem::where('user_id', auth()->id())->get(); // Assuming you have the user_id in your cart items table

        return view('website.cartlist', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        // Get product ID from the request
        $productId = $request->input('product_id');

        // Find the product
        $product = Product::find($productId);

        // Check if the product exists
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Check if the user is authenticated
        $user_id = auth()->id();

        if (!$user_id) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        // Generate a unique cart item ID
        do {
            $cartItem_id = $this->generateCartItemId();
        } while (CartItem::where('cartItem_id', $cartItem_id)->exists());

        try {
            // Create a new cart item
            $cartItem = new CartItem([
                'cartItem_id' => $cartItem_id,
                'user_id' => $user_id,
                'product_id' => $product->product_id,
                'quantity' => 1, // You can modify this based on user input
                'subtotal' => $product->price,
            ]);

            // Save the cart item to the database
            $cartItem->save();

            // Return success response
            return response()->json(['message' => 'Product added to cart successfully']);
        } catch (\Exception $e) {
            // Return error response if there's an issue saving to the database
            return response()->json(['error' => 'Error saving to the database'], 500);
        }
    }

    public function updateCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Example: Update the quantity of the product in the cart using the CartItem model
        $cartItem = CartItem::where('user_id', auth()->id()) // Adjust as per your authentication logic
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->subtotal = $cartItem->product->price * $quantity; // Update subtotal based on quantity
            $cartItem->save();

            return response()->json(['message' => 'Cart updated successfully']);
        }

        return response()->json(['message' => 'Product not found in the cart'], 404);
    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id');

        // Example: Remove the product from the cart using the CartItem model
        $cartItem = CartItem::where('user_id', auth()->id()) // Adjust as per your authentication logic
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->delete();

            return response()->json(['message' => 'Product removed from cart successfully']);
        }

        return response()->json(['message' => 'Product not found in the cart'], 404);
    }

    private function generateCartItemId(): string
    {
        // Tạo một chuỗi ngẫu nhiên có chiều dài 6 kí tự (bao gồm số, chữ, kí tự đặc biệt)
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $cartItem_id = '';
        for ($i = 0; $i < 6; $i++) {
            $cartItem_id .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $cartItem_id;
    }
}
