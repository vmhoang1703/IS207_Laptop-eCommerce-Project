<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    public function showHomePage(): View
    {
        // Truy vấn sản phẩm có danh mục là "flash sale"
        $flashSalesProducts = Product::where('event', 'Flash Sales')->get();
        // Truy vấn sản phẩm ở tùy chọn "Sản phẩm yêu thích"
        $products = Product::orderByFavoriteCountDesc()->get();

        return view('website.home', compact('flashSalesProducts', 'products'));
    }

    public function updateFavoriteCount(Request $request)
    {
        $productId = $request->input('product_id');
        $increment = $request->input('increment');

        // Logic to update favorite count in the database
        $product = Product::find($productId);
        // dd($product);
        if ($product) {
            $product->total_favorites += $increment ? 1 : -1;
            $product->save();
        }

        // Lấy tổng số lượt yêu thích của từng sản phẩm
        $totalFavoriteCountPerProduct =  $product->total_favorites;

        return response()->json(['total_favorite_count_per_product' => $totalFavoriteCountPerProduct]);
    }
}
