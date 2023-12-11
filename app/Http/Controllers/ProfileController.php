<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // show profile
    public function showProfilePage(): View
    {
        return view('website.profile.myaccount');
    }

    // edit profile
    public function editProfilePage(): View
    {
        // Lấy thông tin người dùng hiện tại
        // $user = Auth::user();

        return view('website.profile.editprofile');
    }
}
