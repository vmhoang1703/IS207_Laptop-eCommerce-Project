<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function showCheckout():View
    {
        return view('website.oder_process.order_show');
    }

    public function showPaymentPage():View
    {
        return view('website.oder_process.order_payment');
    }
    public function showPreorderPage():View
    {
        return view('website.oder_process.preorder');
    }
}
