<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route đăng ký
Route::get('/register', [RegisterController::class, 'showForm'])->name('register.show');
Route::post('/register', [RegisterController::class, 'sendForm'])->name('register.send');
//Route đăng nhập
Route::get('/login', [LoginController::class, 'showForm'])->name('login.show');
Route::post('/login', [LoginController::class, 'sendForm'])->name('login.send');
//Route home
Route::get('/', [HomeController::class, 'showHomePage'])->name('home.show');
//Route đăng nhập với Google
Route::get('/api', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/api/callback', [GoogleController::class, 'handleGoogleCallback']);

// Route::get('/admin/dashboard', [AdminController::class, 'showDashboardPage'])->middleware('checklogin::class');
Route::get('/admin/dashboard', [AdminController::class, 'showDashboardPage']);
Route::get('/admin/tables', [AdminController::class, 'showTablesPage']);
Route::get('/admin/charts', [AdminController::class, 'showChartsPage']);
Route::get('/admin/products-management', [AdminController::class, 'showProductsManagementPage']);
Route::get('/admin/orders-management', [AdminController::class, 'showOrdersManagementPage']);
Route::get('/admin/users-management', [AdminController::class, 'showUsersManagementPage']);
