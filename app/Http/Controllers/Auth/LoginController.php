<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

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
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();
 
        if ($user && password_verify($password, $user->password)) {
            // Đăng nhập thành công
            Auth::login($user);
            return redirect(route('home.show'))->with('success', 'Đăng nhập thành công!');
        } else {
            // Đăng nhập thất bại
            return redirect(route('login.show'))->with('error', 'Đăng nhập thất bại!');
        }
    }
    public function logout()
    {
        Auth::logout();

        // If you want to redirect the user after logout, you can specify the URL
        return redirect()->route('login.show'); // Replace 'home' with the route you want to redirect to after logout
    }
}
