<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function showCartList(): View
    {
        return view('website.cartlist');
    }
}