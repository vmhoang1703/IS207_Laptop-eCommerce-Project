<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function showStorePage(): View
    {
        // $products = Product::with('images')->get();
        $products = Product::all();
        return view('website.store', compact('products'));
    }
}
