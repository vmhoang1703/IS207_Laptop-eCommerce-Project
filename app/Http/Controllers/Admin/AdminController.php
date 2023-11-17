<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    public function showDashboardPage(): View
    {
        return view('admin.dashboard');
    }
    public function showTablesPage(): View
    {
        return view('admin.tables');
    }
    public function showChartsPage(): View
    {
        return view('admin.charts');
    }
    public function showProductsManagementPage(): View
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }
    public function showOrdersManagementPage(): View
    {
        return view('admin.orders');
    }
    public function showUsersManagementPage(): View
    {
        return view('admin.users');
    }
}

