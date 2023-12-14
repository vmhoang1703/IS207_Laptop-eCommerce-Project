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
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MomoPaymentController;
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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Route đăng nhập với Google
Route::post('/google-login', [GoogleController::class, 'login'])->name('google.login');
// Route::get('/api', [GoogleController::class, 'loginWithGoogle'])->name('google.login');
// Route::get('/api/callback', [GoogleController::class, 'callbackFromGoogle'])

//Route home
Route::get('/', [HomeController::class, 'showHomePage'])->name('home.show');
Route::post('/update-favorite-count', [HomeController::class, 'updateFavoriteCount']);
//Route cửa hàng
Route::get('/store', [StoreController::class, 'showStorePage'])->name('store.show');
Route::post('/store/filter', [StoreController::class, 'filterProduct'])->name('store.filter');
Route::get('/store/filter/{id}/main-image', [StoreController::class, 'getMainImage'])->name('store.getMainImage');
//Route chi tiết sản phẩm
Route::get('/store/{id}', [DetailProductController::class, 'showDetailProductPage'])->name('detail.show');
//Route About us
Route::get('/about-us', [AboutUsController::class, 'showAboutUsPage'])->name('aboutus.show');
//Route Contact
Route::get('/contact-us', [ContactUsController::class, 'showContactUsPage'])->name('contactus.show');
//Profile
Route::get('/profile', [ProfileController::class, 'showProfilePage'])->name('profile.show');
//Add to Cart
Route::get('/cart', [CartController::class, 'showCartList'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/cart/checkout/process', [CartController::class, 'processCheckout'])->name('cart.checkout.process');
//Buy now
Route::get('/{id}/checkout', [OrderController::class, 'showCheckout'])->name('checkout.show');
Route::get('/{id}/payment', [OrderController::class, 'showPaymentPage'])->name('payment.show');
Route::post('/checkout/update-quantity', [OrderController::class, 'updateQuantity']);
Route::post('/submit-order', [OrderController::class, 'submitOrder'])->name('submit.order');

//Blog
Route::get('/blog', [BlogController::class, 'showBlog'])->name('blog.show');
Route::get('/blog/article', [BlogController::class, 'showArticle'])->name('article.show');
Route::get('/blog/category', [BlogController::class, 'showCategory'])->name('category.show');


Route::middleware(['auth'])->group(function () {
    Route::get('/momo-payment', [MomoPaymentController::class, 'makePayment'])->name('momo.payment');
    // edit Profile
    Route::get('/profile/{id}/edit', [ProfileController::class, 'editProfilePage'])->name('profile.edit');
    Route::put('/profile/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');

    //Profile - My order 
    Route::get('/profile/myoder', [ProfileController::class, 'showMyOrderPage'])->name('profile.showorder');

    //Profile - cancellation order 
    Route::get('/profile/cancellation', [ProfileController::class, 'showMyCancellationPage'])->name('profile.showCancellation');

    //Profile - pre order 
    Route::get('/profile/preorder', [ProfileController::class, 'showMyPreOderPage'])->name('profile.showPreOrder');

    //Profile - history order 
    Route::get('/profile/history', [ProfileController::class, 'showMyHistoryOderPage'])->name('profile.showHistoryOrder');
});


Route::middleware(['auth', 'checkRole:admin'])->group(function () {
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
    Route::get('/admin/orders-management/{id}/view', [OrdersManagementController::class, 'viewOrderPage'])->name('order.view');
    Route::get('/admin/orders-management/{id}/edit', [OrdersManagementController::class, 'editOrderPage'])->name('order.edit');
    Route::put('/admin/orders-management/{id}', [OrdersManagementController::class, 'updateOrder'])->name('order.update');

    // Users management
    Route::get('/admin/customers-management', [UsersManagementController::class, 'showCustomersManagementPage'])->name('customers.management');
    Route::get('/admin/employees-management', [UsersManagementController::class, 'showEmployeesManagementPage'])->name('employees.management');
    Route::get('/admin/employees-management/create', [UsersManagementController::class, 'createEmployeePage'])->name('employee.create');
    Route::post('/admin/employees-management/store', [UsersManagementController::class, 'storeEmployee'])->name('employee.store');
    Route::get('/admin/customers-management/{id}/view', [UsersManagementController::class, 'viewCustomerPage'])->name('customer.view');
    Route::get('/admin/employees-management/{id}/view', [UsersManagementController::class, 'viewEmployeePage'])->name('employee.view');
    Route::get('/admin/employees-management/{id}/edit', [UsersManagementController::class, 'editEmployeePage'])->name('employee.edit');
    Route::put('/admin/employees-management/{id}', [UsersManagementController::class, 'updateEmployee'])->name('employee.update');
    Route::get('/admin/employees-management/{id}/delete', [UsersManagementController::class, 'deleteEmployee'])->name('employee.delete');

    //Chart
    Route::get('/api/get-total-products-data-by-category', [ChartController::class, 'getTotalProductsDataByCategory']);
    Route::get('/api/get-customer-registration-data', [ChartController::class, 'getCustomerRegistrationData']);
    Route::get('/api/get-customer-knownFrom-data', [ChartController::class, 'getCustomerKnownFromData']);
    Route::get('/api/get-employee-chart-data', [ChartController::class, 'getEmployeeChartData']);
});

Route::middleware(['auth', 'checkRole:products_manager'])->group(function () {
    // Products Manager routes
    Route::get('/products_manager', [AdminController::class, 'showAdminPage'])->name('admin.show');
    // Categories management
    Route::get('/products-manager/categories-management', [CategoriesManagementController::class, 'showCategoriesManagementPage'])->name('products_manager.categories.management');
    Route::get('/products-manager/categories-management/create', [CategoriesManagementController::class, 'createCategoryPage'])->name('products_manager.category.create');
    Route::post('/products-manager/categories-management/store', [CategoriesManagementController::class, 'storeCategory'])->name('products_manager.category.store');
    Route::get('/products-manager/categories-management/{id}/view', [CategoriesManagementController::class, 'viewCategoryPage'])->name('products_manager.category.view');
    Route::get('/products-manager/categories-management/{id}/edit', [CategoriesManagementController::class, 'editCategoryPage'])->name('products_manager.category.edit');
    Route::put('/products-manager/categories-management/{id}', [CategoriesManagementController::class, 'updateCategory'])->name('products_manager.category.update');
    Route::get('/products-manager/categories-management/{id}/delete', [CategoriesManagementController::class, 'deleteCategory'])->name('products_manager.category.delete');

    // Products management
    Route::get('/products-manager/products-management', [ProductsManagementController::class, 'showProductsManagementPage'])->name('products_manager.products.management');
    Route::get('/products-manager/products-management/create', [ProductsManagementController::class, 'createProductPage'])->name('products_manager.product.create');
    Route::post('/products-manager/products-management/store', [ProductsManagementController::class, 'storeProduct'])->name('products_manager.product.store');
    Route::get('/products-manager/products-management/{id}/view', [ProductsManagementController::class, 'viewProductPage'])->name('products_manager.product.view');
    Route::get('/products-manager/products-management/{id}/edit', [ProductsManagementController::class, 'editProductPage'])->name('products_manager.product.edit');
    Route::put('/products-manager/products-management/{id}', [ProductsManagementController::class, 'updateProduct'])->name('products_manager.product.update');
    Route::get('/products-manager/products-management/{id}/delete', [ProductsManagementController::class, 'deleteProduct'])->name('products_manager.product.delete');
});

Route::middleware(['auth', 'checkRole:sales'])->group(function () {
    // Sales routes
    Route::get('/sales', [AdminController::class, 'showAdminPage'])->name('admin.show');
    // Orders management
    Route::get('/sales/orders-management', [OrdersManagementController::class, 'showOrdersManagementPage'])->name('sales.orders.management');

    // Customers management
    Route::get('/sales/customers-management', [UsersManagementController::class, 'showCustomersManagementPage'])->name('sales.customers.management');
    Route::get('/sales/customers-management/{id}/view', [UsersManagementController::class, 'viewCustomerPage'])->name('sales.customer.view');
});

Route::middleware(['auth', 'checkRole:accounting'])->group(function () {
    // Accounting routes
    Route::get('/accounting', [AdminController::class, 'showAdminPage'])->name('admin.show');
    // Revenue management
});

Route::middleware(['auth', 'checkRole:marketing'])->group(function () {
    // Marketing routes
    Route::get('/marketing', [AdminController::class, 'showAdminPage'])->name('admin.show');
    // Customers management
    Route::get('/marketing/customers-management', [UsersManagementController::class, 'showCustomersManagementPage'])->name('marketing.customers.management');
    Route::get('/marketing/customers-management/{id}/view', [UsersManagementController::class, 'viewCustomerPage'])->name('marketing.customer.view');
});
