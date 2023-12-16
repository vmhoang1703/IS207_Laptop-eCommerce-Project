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

    public function getOrderDetails(Request $request)
    {
        $orderId = $request->get('orderId');
        $order = Order::with('product.images')->find($orderId);

        if (!$order) {
            return response()->json(['error' => 'Order not found'], 404);
        }

        $data = [
            'order_id' => $order->order_id,
            'product' => [
                'title' => $order->product->title,
            ],
            'quantity' => $order->quantity,
            'total' => $order->total,
        ];

        return response()->json($data);
    }

    public function checkOrderStatus(Request $request)
    {
        $orderId = $request->input('orderId');
        $order = Order::find($orderId);

        if ($order) {
            return response()->json(['status' => $order->status]);
        } else {
            return response()->json(['status' => 'error']);
        }
    }

    public function cancelOrder(Request $request)
    {
        $orderId = $request->input('orderId');
        $note = $request->input('reason');

        

        return response()->json(['success' => true]);
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
