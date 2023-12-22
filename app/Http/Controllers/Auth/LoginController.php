<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    // use AuthenticatesUsers;
    protected $redirectTo = '/';
    protected $activationService;
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
            Auth::login($user);
            return redirect(route('home.show'))->with('success', 'Đăng nhập thành công!');
        } else {
            return redirect(route('login.show'))->with('error', 'Đăng nhập thất bại!');
        }
    }
    protected function authenticated(Request $request, $user)
    {
        if (!$user->active) {
            $this->activationService->sendActivationMail($user);
            auth()->logout();
            return back()->with('warning', 'Bạn cần xác thực tài khoản, chúng tôi đã gửi mã xác thực vào email của bạn, hãy kiểm tra và làm theo hướng dẫn.');
        }
        return redirect()->intended($this->redirectPath());
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.show');
    }
}
