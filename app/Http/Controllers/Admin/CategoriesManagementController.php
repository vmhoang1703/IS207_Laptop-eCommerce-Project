<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesManagementController extends Controller
{
    //
    public function showCategoriesManagementPage(): View
    {
        $categories = Category::all();
        return view('admin.category.categories', compact('categories'));
    }

    public function createCategoryPage(): View
    {
        return view('admin.category.category_create');
    }

    public function storeCategory(Request $request)
    {
        // Đánh giá, kiểm tra form
        $request->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'content' => 'required'
            // Thêm các quy tắc kiểm tra khác tùy thuộc vào yêu cầu của bạn
        ]);

        try {
            do {
                $category_id = $this->generateCategoryId();
            } while (Category::where('category_id', $category_id)->exists());
            // Gán dữ liệu nhập vào các trường thông tin
            $category = new Category([
                'category_id' => $category_id,
                'title' => $request->input('title'),
                'meta_title' => $request->input('meta_title'),
                'content' => $request->input('content')
                // Thêm các trường khác tùy thuộc vào yêu cầu của bạn
            ]);

            // Generate and set the slug
            $category->slug = $category->generateSlug();

            // Lưu vào db
            $category->save();

            if (Auth::user()->role == "admin") {
                // Điều hướng đến trang quản lý sản phẩm và gửi thông báo thành công
                return redirect()->route('categories.management')->with('success', 'Category created successfully');
            } else if (Auth::user()->role == "products_manager") {
                // Điều hướng đến trang quản lý sản phẩm và gửi thông báo thành công
                return redirect()->route('products_manager.categories.management')->with('success', 'Category created successfully');
            }
        } catch (\Exception $e) {
            // Nếu có lỗi, quay trở lại form với thông báo lỗi
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function viewCategoryPage($id)
    {
        $category = Category::find($id);
        return view('admin.category.category_view', compact('category'));
    }
    public function editCategoryPage($id)
    {
        $category = Category::find($id);
        return view('admin.category.category_edit', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());

        if (Auth::user()->role == "admin") {
            return redirect()->route('categories.management')->with('success', 'Category updated successfully!');
        } else if (Auth::user()->role == "products_manager") {
            // Điều hướng đến trang quản lý sản phẩm và gửi thông báo thành công
            return redirect()->route('products_manager.categories.management')->with('success', 'Category updated successfully');
        }
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        if (Auth::user()->role == "admin") {
            // Redirect về trang quản lý sản phẩm với thông báo thành công
            return redirect()->route('categories.management')->with('success', 'Category deleted successfully');
        } else if (Auth::user()->role == "products_manager") {
            // Redirect về trang quản lý sản phẩm với thông báo thành công
            return redirect()->route('products_manager.categories.management')->with('success', 'Category deleted successfully');
        }
    }

    private function generateCategoryId(): string
    {
        // Tạo một chuỗi ngẫu nhiên có chiều dài 6 kí tự (bao gồm số, chữ, kí tự đặc biệt)
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $category_id = '';
        for ($i = 0; $i < 6; $i++) {
            $category_id .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $category_id;
    }
}
