<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
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
    public function showDashboardPage(): View
    {
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));
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
