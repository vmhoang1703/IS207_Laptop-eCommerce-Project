<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoriesManagementController extends Controller
{
    //
    public function showCategoriesManagementPage(): View
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function createCategoryPage(): View
    {
        return view('admin.category.category_create');
    }

    public function storeCategory(Request $request)
    {
        // Đánh giá, kiểm tra form
        $request->validate([
            'name' => 'required',
            // Thêm các quy tắc kiểm tra khác tùy thuộc vào yêu cầu của bạn
        ]);

        try {
            // Tạo user_id mới và kiểm tra xem nó có tồn tại trong cơ sở dữ liệu hay không
            do {
                $category_id = $this->generateCategoryId();
            } while (Category::where('category_id', $category_id)->exists());
            // Gán dữ liệu nhập vào các trường thông tin
            $category = new Category([
                'category_id' => $category_id,
                'name' => $request->input('name'),
                // Thêm các trường khác tùy thuộc vào yêu cầu của bạn
            ]);

            // Lưu vào db
            $category->save();

            // Điều hướng đến trang quản lý sản phẩm và gửi thông báo thành công
            return redirect()->route('categories.management')->with('success', 'Category created successfully');
        } catch (\Exception $e) {
            // Nếu có lỗi, quay trở lại form với thông báo lỗi
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
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

        return redirect('/admin/categories-management')->with('success', 'Category updated successfully!');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        // Redirect về trang quản lý sản phẩm với thông báo thành công
        return redirect()->route('categories.management')->with('success', 'Category deleted successfully');
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
