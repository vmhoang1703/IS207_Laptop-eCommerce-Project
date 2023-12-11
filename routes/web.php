<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesManagementController;
use App\Http\Controllers\Admin\OrdersManagementController;
use App\Http\Controllers\Admin\ProductsManagementController;
use App\Http\Controllers\Admin\UsersManagementController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Middleware\CheckLogin;

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

//Route đăng nhập với Google
Route::get('/api', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/api/callback', [GoogleController::class, 'handleGoogleCallback']);

// Group admin routes with middleware
Route::middleware([CheckLogin::class])->group(function () {

    // Admin routes
    Route::get('/admin', [AdminController::class, 'showAdminPage'])->name('admin.show');
    Route::get('/admin/dashboard', [AdminController::class, 'showDashboardPage'])->name('dashboard.show');
    Route::get('/admin/tables', [AdminController::class, 'showTablesPage'])->name('tables.show');
    Route::get('/admin/charts', [AdminController::class, 'showChartsPage'])->name('charts.show');

    // Categories management
    Route::get('/admin/categories-management', [CategoriesManagementController::class, 'showCategoriesManagementPage'])->name('categories.management');
    Route::get('/admin/categories-management/create', [CategoriesManagementController::class, 'createCategoryPage'])->name('category.create');
    Route::post('/admin/categories-management/store', [CategoriesManagementController::class, 'storeCategory'])->name('category.store');
    Route::get('/admin/categories-management/{id}/view', [CategoriesManagementController::class, 'viewCategoryPage'])->name('category.view');
    Route::get('/admin/categories-management/{id}/edit', [CategoriesManagementController::class, 'editCategoryPage'])->name('category.edit');
    Route::put('/admin/categories-management/{id}', [CategoriesManagementController::class, 'updateCategory'])->name('category.update');
    Route::get('/admin/categories-management/{id}/delete', [CategoriesManagementController::class, 'deleteCategory'])->name('category.delete');

    // Products management
    Route::get('/admin/products-management', [ProductsManagementController::class, 'showProductsManagementPage'])->name('products.management');
    Route::get('/admin/products-management/create', [ProductsManagementController::class, 'createProductPage'])->name('product.create');
    Route::post('/admin/products-management/store', [ProductsManagementController::class, 'storeProduct'])->name('product.store');
    Route::get('/admin/products-management/{id}/view', [ProductsManagementController::class, 'viewProductPage'])->name('product.view');
    Route::get('/admin/products-management/{id}/edit', [ProductsManagementController::class, 'editProductPage'])->name('product.edit');
    Route::put('/admin/products-management/{id}', [ProductsManagementController::class, 'updateProduct'])->name('product.update');
    Route::get('/admin/products-management/{id}/delete', [ProductsManagementController::class, 'deleteProduct'])->name('product.delete');

    // Orders management
    Route::get('/admin/orders-management', [OrdersManagementController::class, 'showOrdersManagementPage'])->name('orders.management');

    // Users management
    Route::get('/admin/users-management', [UsersManagementController::class, 'showUsersManagementPage'])->name('users.management');
    // ... Other user routes
});



//Route home
Route::get('/', [HomeController::class, 'showHomePage'])->name('home.show');
Route::post('/update-favourite-count', [HomeController::class, 'updateFavouriteCount']);

//Route cửa hàng
Route::get('/store', [StoreController::class,'showStorePage'])->name('store.show');
Route::post('/store/filter', [StoreController::class,'filterProduct'])->name('store.filter');
Route::get('/store/filter/{id}/main-image', [StoreController::class,'getMainImage'])->name('store.getMainImage');

//Route chi tiết sản phẩm
Route::get('/store/{id}', [DetailProductController::class,'showDetailProductPage'])->name('detail.show');

//Route giao diện Order
Route::get('/checkout/{id}', [OrderController::class,'showCheckout'])->name('checkout.show');
Route::get('/payment', [OrderController::class,'showPaymentPage'])->name('payment.show');
Route::post('/checkout/update-quantity', [OrderController::class,'updateQuantity']);

//Route About us
Route::get('/about-us', [AboutUsController::class, 'showAboutUsPage'])->name('aboutus.show');
//Route Contact
Route::get('/contact-us', [ContactUsController::class, 'showContactUsPage'])->name('contactus.show');

//Profile
Route::get('/profile', [ProfileController::class, 'showProfilePage'])->name('profile.show');

// edit Profile
Route::get('/profile/edit', [ProfileController::class, 'editProfilePage'])->name('profile.edit');

//Profile - My order 
Route::get('/profile/myoder', [ProfileController::class, 'showMyOrderPage'])->name('profile.showorder');

//Profile - cancellation order 
Route::get('/profile/cancellation', [ProfileController::class, 'showMyCancellationPage'])->name('profile.showCancellation');

//Profile - pre order 
Route::get('/profile/preorder', [ProfileController::class, 'showMyPreOderPage'])->name('profile.showPreOrder');


//Profile - history order 
Route::get('/profile/history', [ProfileController::class, 'showMyHistoryOderPage'])->name('profile.showHistoryOrder');