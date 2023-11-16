<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showForm(): View
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request.
     */
    public function sendForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'how_did_you_hear' => 'required|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'knownFrom' => $request->how_did_you_hear,
        ]);

        // Đăng nhập người dùng sau khi đăng ký (tuỳ chọn)
        // Auth::login($user);
        // Hoặc chuyển hướng đến đăng nhập để đăng nhập lại
        return redirect('login')->with('success', 'Đăng ký thành công!');
    }
}
