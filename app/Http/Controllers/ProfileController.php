<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ProductImage;
use App\Models\User;
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
    public function editProfilePage($id)
    {
        // Lấy thông tin người dùng hiện tại
        // $user = Auth::user();
        $user = User::find($id);
        return view('website.profile.editprofile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }
    // show my order
    public function showMyOrderPage(): View
    {
        $orders = Order::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();

        foreach ($orders as $order) {
            $mainImage = ProductImage::where('product_id', $order->product->product_id)
                ->where('is_main', 1)
                ->first();

            $order->product->mainImage = $mainImage;
        }

        return view('website.profile.my-order', compact('orders'));
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
