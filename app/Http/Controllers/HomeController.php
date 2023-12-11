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
        $products = Product::orderByFavouriteCountDesc()->get();

        return view('website.home', compact('flashSalesProducts', 'products'));
    }

    public function updateFavouriteCount(Request $request)
    {
        $productId = $request->input('product_id');
        $increment = $request->input('increment');

        // Logic to update favorite count in the database
        $product = Product::find($productId);
        // dd($product);
        if ($product) {
            $product->total_favourite_count += $increment ? 1 : -1;
            $product->save();
        }

        // Lấy tổng số lượt yêu thích của từng sản phẩm
        $totalFavouriteCountPerProduct =  $product->total_favourite_count;

        return response()->json(['total_favorite_count_per_product' => $totalFavouriteCountPerProduct]);
    }
}
