<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    //
    public function showResetForm():View
    {
        return view('auth.resetpw1');
    }

    public function sendResetEmail(Request $request)
    {
        $email = $request->input('email');

        return view('auth.resetpw2');
    }
}
