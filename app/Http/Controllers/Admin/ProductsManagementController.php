<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductsManagementController extends Controller
{
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
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'description' => 'required',
            // Thêm các quy tắc kiểm tra khác tùy thuộc vào yêu cầu của bạn
        ]);

        try {
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

            // Xử lý upload ảnh
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('public/img/product_images/' . $product->product_id);

                    // Lưu thông tin ảnh vào bảng product_images
                    $productImage = new ProductImage([
                        'product_id' => $product->product_id,
                        'image_path' => $path,
                    ]);

                    $productImage->save();
                }
            }

            // Điều hướng đến trang quản lý sản phẩm và gửi thông báo thành công
            return redirect()->route('products.management')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            // Nếu có lỗi, quay trở lại form với thông báo lỗi
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function viewProductPage($id)
    {
        $product = Product::with('images')->find($id);
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

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();

        // Redirect về trang quản lý sản phẩm với thông báo thành công
        return redirect()->route('products.management')->with('success', 'Product deleted successfully');
    }
}
