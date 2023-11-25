<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrdersManagementController extends Controller
{
    // Controller for orders management
    public function showOrdersManagementPage(): View
    {
        return view('admin.orders');
    }
}
