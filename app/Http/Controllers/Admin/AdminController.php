<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
}
