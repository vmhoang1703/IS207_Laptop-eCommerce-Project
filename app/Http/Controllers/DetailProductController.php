<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    //
    public function showDetailProductPage($id)
    {
        $product = Product::with('images')->find($id);
        $products = Product::all();
        return view('website.productdetails', compact('product', 'products'));
    }
}


