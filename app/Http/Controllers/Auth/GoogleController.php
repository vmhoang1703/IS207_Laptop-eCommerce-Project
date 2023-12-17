<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
   public function login(Request $request)
   {
      // Retrieve user information sent from the frontend
      $name = $request->input('name');
      $email = $request->input('email');

      // Check if the user already exists in your database
      $user = User::where('email', $email)->first();

      if (!$user) {
         do {
            $user_id = $this->generateUserId();
        } while (User::where('user_id', $user_id)->exists());
         // If the user doesn't exist, create a new user
         $user = User::create([
            'user_id' => $user_id,
            'name' => $name,
            'email' => $email,
            'password' => '',
            'knownFrom' => '',
            // Add other fields as needed
         ]);
      }

      // Log in the user
      auth()->login($user);

      return response()->json(['message' => 'User logged in successfully']);
   }

   private function generateUserId(): string
   {
       // Tạo một chuỗi ngẫu nhiên có chiều dài 6 kí tự (bao gồm số, chữ, kí tự đặc biệt)
       $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_+=';
       $user_id = '';
       for ($i = 0; $i < 6; $i++) {
           $user_id .= $characters[rand(0, strlen($characters) - 1)];
       }

       return $user_id;
   }
}
