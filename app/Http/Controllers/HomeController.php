<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    public function showHomePage(): View
    {
        $products = Product::all();
        return view('website.home', compact('products'));   
    }
}
