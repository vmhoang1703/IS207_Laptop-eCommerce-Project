<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
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


    // Controller for products management
    public function showProductsManagementPage(): View
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }
    public function createProductPage(): View
    {
        return view('admin.product_create');
    }
    public function storeProduct(Request $request)
    {
        // Đánh giá, kiểm tra form
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'description' => 'required', 
            // Thêm các quy tắc kiểm tra khác tùy thuộc vào yêu cầu của bạn
        ]);

        // Gán dữ liệu nhập vào các trường thông tin
        $product = new Product([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'oldPrice' => $request->input('oldPrice'),
            'discount' => $request->input('discount'),
            'stock_quantity' => $request->input('stock_quantity'),
            'category_id' => $request->input('category_id'),
            // Thêm các trường khác tùy thuộc vào yêu cầu của bạn
        ]);

        // Lưu vào db
        $product->save();

        // Điều hướng đến trang quản lý sản phẩm và gửi thông báo thành công
        return redirect()->route('products.management')->with('success', 'Product created successfully');
    }
    public function viewProductPage($id)
    {
        $product = Product::find($id);
        return view('admin.product_view', compact('product'));
    }
    public function editProductPage($id)
    {
        $product = Product::find($id);
        return view('admin.product_edit', compact('product'));
    }
    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return redirect('/admin/products-management')->with('success', 'Product updated successfully!');
    }


     // Controller for orders management
    public function showOrdersManagementPage(): View
    {
        return view('admin.orders');
    }
    

     // Controller for users management
    public function showUsersManagementPage(): View
    {
        return view('admin.users');
    }
}
