<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\Paginator;

class StoreController extends Controller
{
    //
    public function showStorePage(): View
    {
        $products = Product::paginate(15);
        $products->withPath(url()->current());

        Paginator::useBootstrap();
        return view('website.store', compact('products'));
    }
    public function filterProduct(Request $request)
    {
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        $filters = $request->input('filters', []);

        $query = Product::query();

        if ($minPrice && $maxPrice) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }

        foreach ($filters as $category => $values) {
            if (is_array($values)) {
                $query->whereIn($category, $values);
            }
        }

        $products = $query->get();

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
            return response()->json(['error' => 'Main image not found']);
        }
    }

    public function searchProduct(Request $request)
    {
        $searchQuery = $request->input('searchQuery');

        $products = Product::where('title', 'like', '%' . $searchQuery . '%')->get();

        return response()->json(['products' => $products]);
    }
}
