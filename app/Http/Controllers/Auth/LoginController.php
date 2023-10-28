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

    // public function redirectToProvider($driver)
    // {
    //     return Socialite::driver($driver)->redirect();
    // }

    // public function handleProviderCallback($driver)
    // {
    //     try {
    //         $user = Socialite::driver($driver)->user();
    //     } catch (\Exception $e) {
    //         return redirect()->route('login');
    //     }

    //     $existingUser = User::where('email', $user->getEmail())->first();

    //     if ($existingUser) {
    //         auth()->login($existingUser, true);
    //     } else {
    //         $newUser                    = new User;
    //         $newUser->provider_name     = $driver;
    //         $newUser->provider_id       = $user->getId();
    //         $newUser->name              = $user->getName();
    //         $newUser->email             = $user->getEmail();
    //         $newUser->email_verified_at = now();
    //         $newUser->avatar            = $user->getAvatar();
    //         $newUser->save();

    //         auth()->login($newUser, true);
    //     }

    //     return redirect($this->redirectPath());
    // }
}
