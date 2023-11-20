<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UsersManagementController extends Controller
{
    // Controller for users management
    public function showUsersManagementPage(): View
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }
}
