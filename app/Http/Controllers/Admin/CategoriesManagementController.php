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
        $request->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'content' => 'required'
        ]);

        try {
            do {
                $category_id = $this->generateCategoryId();
            } while (Category::where('category_id', $category_id)->exists());
            $category = new Category([
                'category_id' => $category_id,
                'title' => $request->input('title'),
                'meta_title' => $request->input('meta_title'),
                'content' => $request->input('content')
            ]);

            $category->slug = $category->generateSlug();

            $category->save();

            if (Auth::user()->role == "admin") {
                return redirect()->route('categories.management')->with('success', 'Category created successfully');
            } else if (Auth::user()->role == "products_manager") {
                return redirect()->route('products_manager.categories.management')->with('success', 'Category created successfully');
            }
        } catch (\Exception $e) {
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
            return redirect()->route('products_manager.categories.management')->with('success', 'Category updated successfully');
        }
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        if (Auth::user()->role == "admin") {
            return redirect()->route('categories.management')->with('success', 'Category deleted successfully');
        } else if (Auth::user()->role == "products_manager") {
            return redirect()->route('products_manager.categories.management')->with('success', 'Category deleted successfully');
        }
    }

    private function generateCategoryId(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $category_id = '';
        for ($i = 0; $i < 6; $i++) {
            $category_id .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $category_id;
    }
}
