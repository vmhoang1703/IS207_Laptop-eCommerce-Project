<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogController extends Controller
{
    //
    public function showBlog(): View
    {
        $blogs = Blog::all();
        $users = User::all();
        $blog_featured = Blog::with('images')->where('featured_post', 'Yes')->first();
        $createdAt = Carbon::parse($blog_featured->created_at);
        $formattedDate = $createdAt->format('jS F Y');
        return view('website.blog.showblog', compact('blogs', 'users', 'blog_featured', 'formattedDate'));
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
    public function showCategory(): View
    {
        return view('website.blog.blog_category');
    }
}
