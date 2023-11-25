<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class StoreController extends Controller
{
    //
    public function showStorePage(): View
    {
        // $products = Product::with('images')->get();
        $products = Product::all();
        return view('website.store', compact('products'));
    }
    public function filterProduct(Request $request)
    {
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');

        // Thực hiện logic lọc sản phẩm ở đây, ví dụ:
        $products = Product::whereBetween('price', [$minPrice, $maxPrice])->get();

        return response()->json(['products' => $products]);
    }

    public function getMainImage($id)
    {
        $mainImage = ProductImage::where('product_id', $id)
            ->where('is_main', 1)
            ->first();

        if ($mainImage) {
            return response()->json(['main_image_path' => asset($mainImage->image_path)]);
        } else {
            // Trả về một đường dẫn mặc định hoặc thông báo lỗi tùy thuộc vào yêu cầu của bạn.
            return response()->json(['error' => 'Main image not found']);
        }
    }
}
