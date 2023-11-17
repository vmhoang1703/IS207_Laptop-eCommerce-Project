<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function showStorePage(): View
    {
        return view('website.store');
    }
}
