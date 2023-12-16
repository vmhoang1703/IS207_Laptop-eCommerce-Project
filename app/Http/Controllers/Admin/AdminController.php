<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showAdminPage()
    {
        $user = Auth::user();
        return view('admin.welcome', compact('user'));
    }
    public function showDashboardPage()
    {
        $user = Auth::user();

        $totalProductsSold = Order::where('status', 'completed')->sum('quantity');
        $customersCount = User::where('role', 'customer')->count();

        return view('admin.dashboard', compact('user', 'totalProductsSold', 'customersCount'));
    }
    public function showTablesPage(): View
    {
        $user = Auth::user();
        return view('admin.tables', compact('user'));
    }
    public function showChartsPage(): View
    {
        $user = Auth::user();
        return view('admin.charts', compact('user'));
    }
}
