<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    //
    public function showDetailProductPage($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if (!$product) {
            abort(404);
        }

        $product->load('images');

        $similarProducts = Product::where('brand', $product->brand)
        ->where('product_id', '!=', $product->product_id)
        ->take(4)
        ->get();

        return view('website.productdetails', compact('product', 'similarProducts'));
    }
}


