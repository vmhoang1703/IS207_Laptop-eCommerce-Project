<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrdersManagementController extends Controller
{
    // Controller for orders management
    public function showOrdersManagementPage(): View
    {
        $orders = Order::all();
        $orderStatusOptions = ['Pending', 'Preparing', 'In delivery', 'Delivered', 'Completed'];

        foreach($orders as $order) {
            $product = Product::find($order->product_id);
            
        }
        return view('admin.order.orders', compact('orders', 'orderStatusOptions'));
    }

    public function viewOrderPage($id)
    {
        $order = Order::find($id);
        return view('admin.order.order_view', compact('order'));
    }

    public function updateOrder(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $order = Order::find($id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        $order->update([
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }
}
