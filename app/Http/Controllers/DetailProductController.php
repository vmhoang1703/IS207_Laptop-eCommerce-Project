<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    //
    public function showDetailProductPage($slug)
    {
        // Lấy sản phẩm dựa trên slug
        $product = Product::where('slug', $slug)->first();

        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$product) {
            abort(404);
        }

        // Lấy các hình ảnh của sản phẩm
        $product->load('images');

        $products = Product::all();

        return view('website.productdetails', compact('product', 'products'));
    }
}


