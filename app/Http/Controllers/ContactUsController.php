<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function showContactUsPage(): View
    {
        return view('website.contact_us');
    }
}
