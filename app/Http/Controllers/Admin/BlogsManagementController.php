<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogImage;
use App\Models\Category;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsManagementController extends Controller
{

    public function showBlogsManagementPage(): View
    {
        $blogs = Blog::all();
        $categories = Category::all();
        $users = User::all();
        return view('admin.blog.blogs', compact('blogs','categories','users'));
    }

    public function createBlogPage(): View
    {
        $categories = Category::all();
        return view('admin.blog.blog_create', compact('categories'));
    }

    public function storeBlog(Request $request)
    {
        $request->validate([
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,category_id',
            'featured_post' => 'required',
            'summary' => 'required',
        ]);

        try {
            do {
                $blog_id = $this->generateBlogId();
            } while (Blog::where('blog_id', $blog_id)->exists());

            $user_id = Auth::user()->user_id;
            $blog = new Blog([
                'blog_id' => $blog_id,
                'user_id' => $user_id,
                'title' => $request->input('title'),
                'meta_title' => $request->input('meta_title'),
                'content' => $request->input('content'),
                'category_id' => $request->input('category_id'),
                'featured_post' => $request->input('featured_post'),
                'summary' => $request->input('summary')
            ]);

            $blog->slug = $blog->generateSlug();

            //$category = Category::find($request->input('category_id'));
            //$category->total_blogs += 1;

            $blog->save();
            //$category->save();

            $mainImage = $request->file('main_image');
            $mainImageName = uniqid() . '.' . $mainImage->getClientOriginalExtension();
            $mainImagePath = 'public/img/blog_images/' . $blog->blog_id . '/' . $mainImageName;

            $blogImage = new BlogImage([
                'blog_id' => $blog->blog_id,
                'image_path' => 'storage/img/blog_images/' . $blog->blog_id . '/' . $mainImageName,
                'is_main' => true,
            ]);
            $blogImage->save();

            $mainImage->storeAs('public/img/blog_images/' . $blog->blog_id, $mainImageName);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $image_name = uniqid() . '.' . $image->getClientOriginalExtension();

                    $path = $image->storeAs('public/img/blog_images/' . $blog->blog_id, $image_name);

                    $blogImage = new BlogImage([
                        'blog_id' => $blog->blog_id,
                        'image_path' => 'storage/img/blog_images/' . $blog->blog_id . '/' . $image_name,
                        'is_main' => false,
                    ]);

                    $blogImage->save();
                }
            }
            if (Auth::user()->role == "admin") {
                return redirect()->route('blogs.management')->with('success', 'Blog created successfully');
            } else if (Auth::user()->role == "products_manager") {
                return redirect()->route('products_manager.blogs.management')->with('success', 'Blog created successfully');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function viewBlogPage($id)
    {
        $blog = blog::with('images')->find($id);
        $categories = Category::all();
        return view('admin.blog.blog_view', compact('blog', 'categories'));
    }

    public function editBlogPage($id)
    {
        $blog = blog::find($id);
        $categories = Category::all();
        return view('admin.blog.blog_edit', compact('blog', 'categories'));
    }

    public function updateBlog(Request $request, $id)
    {
        $blog = blog::find($id);
        $blog->update($request->all());

        if (Auth::user()->role == "admin") {
            return redirect()->route('blogs.management')->with('success', 'Blog updated successfully');
        } else if (Auth::user()->role == "products_manager") {
            return redirect()->route('products_manager.blogs.management')->with('success', 'Blog updated successfully');
        }
    }

    public function deleteBlog($id)
    {
        $blog = blog::find($id);
        $blog->delete();

        //$category = Category::find($blog->category_id);
        //$category->total_blogs -= 1;
        //$category->save();

        if (Auth::user()->role == "admin") {
            return redirect()->route('blogs.management')->with('success', 'Blog deleted successfully');
        } else if (Auth::user()->role == "products_manager") {
            return redirect()->route('products_manager.blogs.management')->with('success', 'Blog deleted successfully');
        }
    }


    private function generateBlogId(): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $blog_id = '';
        for ($i = 0; $i < 6; $i++) {
            $blog_id .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $blog_id;
    }
}
