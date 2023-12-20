<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsManagementController extends Controller
{
    public function showProductsManagementPage(): View
    {
        $products = Product::all();
        return view('admin.product.products', compact('products'));
    }

    public function createProductPage(): View
    {
        $categories = Category::all();
        return view('admin.product.product_create', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
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
            'event' => 'required',
        ]);

        try {
            do {
                $product_id = $this->generateProductId();
            } while (Product::where('product_id', $product_id)->exists());

            $user_id = Auth::user()->user_id;
            $product = new Product([
                'product_id' => $product_id,
                'user_id' => $user_id,
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
            ]);

            $product->slug = $product->generateSlug();

            $category = Category::find($request->input('category_id'));
            $category->total_products += 1;

            $product->save();
            $category->save();

            $mainImage = $request->file('main_image');
            $mainImageName = uniqid() . '.' . $mainImage->getClientOriginalExtension();
            $mainImagePath = 'public/img/product_images/' . $product->product_id . '/' . $mainImageName;

            $productImage = new ProductImage([
                'product_id' => $product->product_id,
                'image_path' => 'storage/img/product_images/' . $product->product_id . '/' . $mainImageName,
                'is_main' => true,
            ]);
            $productImage->save();

            $mainImage->storeAs('public/img/product_images/' . $product->product_id, $mainImageName);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $image_name = uniqid() . '.' . $image->getClientOriginalExtension();

                    $path = $image->storeAs('public/img/product_images/' . $product->product_id, $image_name);

                    $productImage = new ProductImage([
                        'product_id' => $product->product_id,
                        'image_path' => 'storage/img/product_images/' . $product->product_id . '/' . $image_name,
                        'is_main' => false,
                    ]);

                    $productImage->save();
                }
            }
            if (Auth::user()->role == "admin") {
                return redirect()->route('products.management')->with('success', 'Product created successfully');
            } else if (Auth::user()->role == "products_manager") {
                return redirect()->route('products_manager.products.management')->with('success', 'Product created successfully');
            }
        } catch (\Exception $e) {
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

        if (Auth::user()->role == "admin") {
            return redirect()->route('products.management')->with('success', 'Product updated successfully');
        } else if (Auth::user()->role == "products_manager") {
            return redirect()->route('products_manager.products.management')->with('success', 'Product updated successfully');
        }
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();

        $category = Category::find($product->category_id);
        $category->total_products -= 1;
        $category->save();

        if (Auth::user()->role == "admin") {
            return redirect()->route('products.management')->with('success', 'Product deleted successfully');
        } else if (Auth::user()->role == "products_manager") {
            return redirect()->route('products_manager.products.management')->with('success', 'Product deleted successfully');
        }
    }


    private function generateProductId(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $product_id = '';
        for ($i = 0; $i < 6; $i++) {
            $product_id .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $product_id;
    }
}
