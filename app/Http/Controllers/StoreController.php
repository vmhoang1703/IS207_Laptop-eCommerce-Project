<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
    public function filter(Request $request): JsonResponse
    {
        // Implement your filtering logic here based on $request->input('filters')
        // Update $products accordingly
        $products = Product::all();
        // Return the updated product list as JSON
        return response()->json(['products' => $products]);
    }
}
