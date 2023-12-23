<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrdersManagementController extends Controller
{
    public function showOrdersManagementPage(): View
    {
        $orders = Order::all();
        $orderStatusOptions = ['Pending', 'Preparing', 'In delivery', 'Delivered', 'Completed'];

        foreach ($orders as $order) {
            if ($order->product) {
                $product = Product::find($order->product_id);
            } else {
                // For orders with multiple products
                $cartItemIds = explode(',', $order->cartItem_id);

                $products = [];
                foreach ($cartItemIds as $cartItemId) {
                    $cartItem = CartItem::find($cartItemId);

                    if ($cartItem) {
                        $productId = $cartItem->product_id;
                        $product = Product::find($productId);

                        if ($product) {
                            $mainImage = ProductImage::where('product_id', $productId)
                                ->where('is_main', 1)
                                ->first();

                            $product->mainImage = $mainImage;
                            $products[] = $product;
                        }
                    }
                }

                $order->products = $products;
                // dd($products);
            }
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
