<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    //
    public function showDetailProductPage(): View
    {
        return view('website.productdetails');
    }
}
