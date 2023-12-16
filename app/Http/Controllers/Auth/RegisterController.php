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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'how_did_you_hear' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect(route('register.show'))
                ->withErrors($validator)
                ->withInput();
        }

        // Tạo user_id mới và kiểm tra xem nó có tồn tại trong cơ sở dữ liệu hay không
        do {
            $user_id = $this->generateUserId();
        } while (User::where('user_id', $user_id)->exists());

        $user = User::create([
            'user_id' => $user_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->input('password')),
            'knownFrom' => $request->how_did_you_hear,
        ]);
        // Đăng nhập người dùng sau khi đăng ký (tuỳ chọn)
        // Auth::login($user);
        // Hoặc chuyển hướng đến đăng nhập để đăng nhập lại
        return redirect(route('login.show'))->with('success', 'Đăng ký thành công!');
    }

    private function generateUserId(): string
    {
        // Tạo một chuỗi ngẫu nhiên có chiều dài 6 kí tự (bao gồm số, chữ, kí tự đặc biệt)
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $user_id = '';
        for ($i = 0; $i < 6; $i++) {
            $user_id .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $user_id;
    }
}
