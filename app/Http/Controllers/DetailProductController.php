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

        $products = Product::all();

        return view('website.productdetails', compact('product', 'products'));
    }
}


