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
        return view('admin.product.product_create');
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
            // Tạo user_id mới và kiểm tra xem nó có tồn tại trong cơ sở dữ liệu hay không
            do {
                $product_id = $this->generateProductId();
            } while (Product::where('product_id', $product_id)->exists());
            // Gán dữ liệu nhập vào các trường thông tin
            $product = new Product([
                'product_id' => $product_id,
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'oldPrice' => $request->input('oldPrice'),
                'discount' => $request->input('discount'),
                'stock_quantity' => $request->input('stock_quantity'),
                'category_id' => $request->input('category_id'),
                'screen_size' => $request->input('screen_size'),
                'CPU' => $request->input('CPU'),
                'RAM' => $request->input('RAM'),
                'hard_disk_drive' => $request->input('hard_disk_drive'),
                // Thêm các trường khác tùy thuộc vào yêu cầu của bạn
            ]);

            // Lưu vào db
            $product->save();

            // Xử lý upload ảnh
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    // Generate a unique filename for the image
                    $image_name = uniqid() . '.' . $image->getClientOriginalExtension();

                    // Store the image in the storage
                    $path = $image->storeAs('public/img/product_images/' . $product->product_id, $image_name);

                    // Save the relative path to the image in the database
                    $productImage = new ProductImage([
                        'product_id' => $product->product_id,
                        'image_path' => 'img/product_images/' . $product->product_id . '/' . $image_name,
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
        return view('admin.product.product_view', compact('product'));
    }

    public function editProductPage($id)
    {
        $product = Product::find($id);
        return view('admin.product.product_edit', compact('product'));
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


    private function generateProductId(): string
    {
        // Tạo một chuỗi ngẫu nhiên có chiều dài 6 kí tự (bao gồm số, chữ, kí tự đặc biệt)
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $product_id = '';
        for ($i = 0; $i < 6; $i++) {
            $product_id .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $product_id;
    }
}
