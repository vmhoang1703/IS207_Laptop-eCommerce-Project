<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;

class BlogController extends Controller
{
    //
    public function showBlog(): View
    {
        $blogs = Blog::paginate(3);
        $blogs->withPath(url()->current());

        Paginator::useBootstrap();
        $users = User::all();
        $blog_featured = Blog::with('images')->where('featured_post', 'Yes')->first();
        $createdAt = Carbon::parse($blog_featured->created_at);
        $formattedDate = $createdAt->format('jS F Y');

        $blogsBusiness = Category::where('title', 'Business - Blog')->first();
        $blogsStartup = Category::where('title', 'Startup - Blog')->first();
        $blogsEconomy = Category::where('title', 'Economy - Blog')->first();
        $blogsTechnology = Category::where('title', 'Technology - Blog')->first();

        return view('website.blog.showblog', compact('blogs', 'users', 'blog_featured', 'formattedDate', 'blogsBusiness', 'blogsStartup', 'blogsEconomy', 'blogsTechnology'));
    }
    public function showArticle($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        if (!$blog) {
            abort(404);
        }

        $blog->load('images');
        $users = User::all();

        $createdAt = Carbon::parse($blog->created_at);
        $formattedDate = $createdAt->format('jS F Y');

        return view('website.blog.blog_article', compact('blog', 'users', 'formattedDate'));
    }
    public function showCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $blogs = Blog::with('images')->where('category_id', $category->category_id)->paginate(3);

        $blogsBusiness = Category::where('title', 'Business - Blog')->first();
        $blogsStartup = Category::where('title', 'Startup - Blog')->first();
        $blogsEconomy = Category::where('title', 'Economy - Blog')->first();
        $blogsTechnology = Category::where('title', 'Technology - Blog')->first();

        return view('website.blog.blog_category', compact('category', 'blogs', 'blogsBusiness', 'blogsStartup', 'blogsEconomy', 'blogsTechnology'));
    }
}
