<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //                                    
    public function showAboutUsPage(): View
    {
        return view('website.about_us');
    }
}
