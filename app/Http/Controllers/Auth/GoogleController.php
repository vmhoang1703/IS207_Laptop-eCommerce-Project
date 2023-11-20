<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
   public function redirectToGoogle()
   {
      return Socialite::driver("google")->redirect();
   }

   public function handleGoogleCallback($value = '')
   {
      $user = Socialite::driver('google')->user();

      // Kiểm tra xem người dùng đã tồn tại trong cơ sở dữ liệu chưa
      $existingUser = User::where('email', $user->email)->first();

      if ($existingUser) {
         // Đăng nhập người dùng
         auth()->login($existingUser);
      } else {
         // Tạo người dùng mới
         $newUser = User::create([
            'name' => $user->name,
            'username' => '',
            'email' => $user->email,
            'password'=> bcrypt(''),
            // Thêm các trường thông tin khác tùy theo yêu cầu
         ]);
         auth()->login($newUser);
      }

      // Điều hướng người dùng sau khi đăng nhập
      return redirect('/');
   }
}
