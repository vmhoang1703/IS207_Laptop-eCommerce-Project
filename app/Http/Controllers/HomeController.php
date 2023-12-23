<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function showHomePage(): View
    {
        $user = Auth::user();
        $flashSalesProducts = Product::where('event', 'Flash Sales')->get();
        $products = Product::orderByFavoriteCountDesc()->get();

        return view('website.home', compact('flashSalesProducts', 'products', 'user'));
    }

    public function updateFavoriteCount(Request $request)
    {
        $productId = $request->input('product_id');
        $increment = $request->input('increment');

        $product = Product::find($productId);
        if ($product) {
            $product->total_favorites += $increment ? 1 : -1;
            $product->save();
        }

        $totalFavoriteCountPerProduct =  $product->total_favorites;

        return response()->json(['total_favorite_count_per_product' => $totalFavoriteCountPerProduct]);
    }
}
