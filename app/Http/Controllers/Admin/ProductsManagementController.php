<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $categories = Category::all();
        return view('admin.product.product_create', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        // Validation rules
        $request->validate([
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'required',
            'status' => 'required|in:In stock,Upcoming,Out stock',
            'category_id' => 'required|exists:categories,category_id',
            'brand' => 'required',
            'screen_size' => 'required',
            'CPU' => 'required',
            'RAM' => 'required',
            'storage' => 'required',
            'event' => 'required|in:None,Flash Sales',
        ]);

        try {
            // Generate a unique product_id
            do {
                $product_id = $this->generateProductId();
            } while (Product::where('product_id', $product_id)->exists());

            // Create a new Product instance
            $product = new Product([
                'product_id' => $product_id,
                'title' => $request->input('title'),
                'meta_title' => $request->input('meta_title'), 
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'discount' => $request->input('discount'),
                'quantity' => $request->input('quantity'), 
                'status' => $request->input('status'),
                'category_id' => $request->input('category_id'),
                'brand' => $request->input('brand'),
                'screen_size' => $request->input('screen_size'),
                'CPU' => $request->input('CPU'),
                'RAM' => $request->input('RAM'),
                'storage' => $request->input('storage'),
                'event' => $request->input('event'),
                // Add other fields as needed
            ]);

            // Generate and set the slug
            $product->slug = $product->generateSlug();

            // Find the category and update total_products count
            $category = Category::find($request->input('category_id'));
            $category->total_products += 1;

            // Save product and category
            $product->save();
            $category->save();

            // Xử lý upload ảnh chính
            $mainImage = $request->file('main_image');
            $mainImageName = uniqid() . '.' . $mainImage->getClientOriginalExtension();
            $mainImagePath = 'public/img/product_images/' . $product->product_id . '/' . $mainImageName;

            // Lưu ảnh chính vào bảng ProductImage
            $productImage = new ProductImage([
                'product_id' => $product->product_id,
                'image_path' => 'storage/img/product_images/' . $product->product_id . '/' . $mainImageName,
                'is_main' => true,
            ]);
            $productImage->save();

            // Lưu ảnh chính vào thư mục lưu trữ
            $mainImage->storeAs('public/img/product_images/' . $product->product_id, $mainImageName);

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
                        'image_path' => 'storage/img/product_images/' . $product->product_id . '/' . $image_name,
                        'is_main' => false,
                    ]);

                    $productImage->save();
                }
            }
            dd('Reached the end of the try block');
            // Điều hướng đến trang quản lý sản phẩm và gửi thông báo thành công
            return redirect()->route('products.management')->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            // Nếu có lỗi, quay trở lại form với thông báo lỗi
            dd($e->getMessage());   
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function viewProductPage($id)
    {
        $product = Product::with('images')->find($id);
        $categories = Category::all();
        return view('admin.product.product_view', compact('product', 'categories'));
    }

    public function editProductPage($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.product_edit', compact('product', 'categories'));
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

        $category = Category::find($product->category_id);
        $category->total_products -= 1; // Decrement by 1
        $category->save();

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
