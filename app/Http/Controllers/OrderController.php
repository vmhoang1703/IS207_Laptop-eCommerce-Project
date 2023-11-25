<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function showOrderPage():View
    {
        return view('website.oder_process.order_show');
    }

    public function showOrderPaymentPage():View
    {
        return view('website.oder_process.order_payment');
    }
}
