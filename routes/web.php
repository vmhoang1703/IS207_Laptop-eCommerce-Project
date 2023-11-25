<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesManagementController;
use App\Http\Controllers\Admin\OrdersManagementController;
use App\Http\Controllers\Admin\ProductsManagementController;
use App\Http\Controllers\Admin\UsersManagementController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\DetailProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;

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
Route::post('/update-favourite-count', [HomeController::class, 'updateFavouriteCount']);
//Route đăng nhập với Google
Route::get('/api', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/api/callback', [GoogleController::class, 'handleGoogleCallback']);

// Route::get('/admin', [AdminController::class, 'showAdminPage'])->middleware('checklogin::class');
Route::get('/admin', [AdminController::class, 'showDashboardPage'])->name('dashboard.show');
Route::get('/admin/tables', [AdminController::class, 'showTablesPage'])->name('tables.show');
Route::get('/admin/charts', [AdminController::class, 'showChartsPage'])->name('charts.show');

// Route categories management
Route::get('/admin/categories-management', [CategoriesManagementController::class, 'showCategoriesManagementPage'])->name('categories.management');
Route::get('/admin/categories-management/create', [CategoriesManagementController::class, 'createCategoryPage'])->name('category.create');
Route::post('/admin/categories-management', [CategoriesManagementController::class, 'storeCategory'])->name('category.store');
Route::get('/admin/categories-management/{id}/edit', [CategoriesManagementController::class, 'editCategoryPage'])->name('category.edit');
Route::put('/admin/categories-management/{id}', [CategoriesManagementController::class, 'updateCategory'])->name('category.update');
Route::get('/admin/categories-management/{id}/delete', [CategoriesManagementController::class, 'deleteCategory'])->name('category.delete');

// Route products management
Route::get('/admin/products-management', [ProductsManagementController::class, 'showProductsManagementPage'])->name('products.management');
Route::get('/admin/products-management/create', [ProductsManagementController::class, 'createProductPage'])->name('product.create');
Route::post('/admin/products-management', [ProductsManagementController::class, 'storeProduct'])->name('product.store');
Route::get('/admin/products-management/{id}/view', [ProductsManagementController::class, 'viewProductPage'])->name('product.view');
Route::get('/admin/products-management/{id}/edit', [ProductsManagementController::class, 'editProductPage'])->name('product.edit');
Route::put('/admin/products-management/{id}', [ProductsManagementController::class, 'updateProduct'])->name('product.update');
Route::get('/admin/products-management/{id}/delete', [ProductsManagementController::class, 'deleteProduct'])->name('product.delete');

// Route orders management
Route::get('/admin/orders-management', [OrdersManagementController::class, 'showOrdersManagementPage'])->name('orders.management');
// Route users management
Route::get('/admin/users-management', [UsersManagementController::class, 'showUsersManagementPage'])->name('users.management');

//Route cửa hàng
Route::get('/store', [StoreController::class,'showStorePage'])->name('store.show');
Route::post('/store/filter', [StoreController::class,'filterProduct'])->name('store.filter');
Route::get('/store/filter/{id}/main-image', [StoreController::class,'getMainImage'])->name('store.getMainImage');

//Route chi tiết sản phẩm
Route::get('/store/{id}', [DetailProductController::class,'showDetailProductPage'])->name('detail.show');


