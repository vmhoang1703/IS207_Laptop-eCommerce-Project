<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function showForm(): View
    {
        return view('auth.login');
    }

    public function sendForm(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $username)->first();

        if ($user && password_verify($password, $user->password)) {
            // Đăng nhập thành công
            Auth::login($user);
            return redirect('/');
        } else {
            // Đăng nhập thất bại
            return redirect('/login')->with('error', 'Invalid username or password');
        }
    }
}
