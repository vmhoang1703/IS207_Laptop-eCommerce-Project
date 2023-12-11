<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function showCheckout($id)
    {
        $product = Product::with('images')->find($id);
        $mainImage = ProductImage::where('product_id', $id)
            ->where('is_main', 1)
            ->first();


        return view('website.oder_process.order_show', compact('product', 'mainImage'));
    }

    public function showPaymentPage(): View
    {
        return view('website.oder_process.order_payment');
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
}
