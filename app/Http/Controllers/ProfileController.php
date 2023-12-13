<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // show profile
    public function showProfilePage(): View
    {
        $user = Auth::user();
        return view('website.profile.myaccount', compact('user'));
    }

    // edit profile
    public function editProfilePage(): View
    {
        // Lấy thông tin người dùng hiện tại
        // $user = Auth::user();

        return view('website.profile.editprofile');
    }

       // show my order
       public function showMyOrderPage(): View
       {
           // Lấy thông tin người dùng hiện tại
           // $user = Auth::user();
   
           return view('website.profile.my-order');
       }

       public function showMyCancellationPage(): View
       {
           // Lấy thông tin người dùng hiện tại
           // $user = Auth::user();
   
           return view('website.profile.cancellation-order');
       }

       public function showMyPreOderPage(): View
       {
           // Lấy thông tin người dùng hiện tại
           // $user = Auth::user();
   
           return view('website.profile.pre-order');
       }

       public function showMyHistoryOderPage(): View
       {
           // Lấy thông tin người dùng hiện tại
           // $user = Auth::user();
   
           return view('website.profile.history-order');
       }
}
