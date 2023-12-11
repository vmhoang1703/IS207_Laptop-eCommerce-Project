<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function showProfilePage(): View
    {
        return view('website.profile.myaccount');
    }
}
