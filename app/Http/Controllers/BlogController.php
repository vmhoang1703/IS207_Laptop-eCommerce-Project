<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function showBlog(): View
    {
        return view('website.blog.showblog');
    }
    public function showArticle(): View
    {
        return view('website.blog.blog_article');
    }
    public function showCategory(): View
    {
        return view('website.blog.blog_category');
    }
}
