@extends('layouts.admin')

@section('title', 'View Product')

@section('content')
<h1 class="h3 mb-2 text-gray-800">View Product</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                @if($product->images->isNotEmpty())
                @foreach($product->images as $image)
                <img src="{{ asset($image->image_path) }}" alt="{{ $product->title }}" class="img-fluid" width="200px" height="200px">
                @endforeach
                @else
                <p>No images available</p>
                @endif
            </div>
            <div class="col-md-6">
                <h2>{{ $product->title }}</h2>
                <ul>
                    <li><strong>Category:</strong>
                        @foreach($categories as $category)
                        @if($product->category_id == $category->category_id)
                        {{ $category->title }}
                        @endif
                        @endforeach
                    </li>
                    <li><strong>Meta title:</strong> {{ $product->meta_title }}</li>
                    <li><strong>Slug:</strong> {{ $product->slug }}</li>
                    <li><strong>Description:</strong> {!! $product->description !!}</li>
                    <li><strong>Price:</strong> {{ $product->price }}$</li>
                    <li><strong>Discount:</strong> {{ $product->discount }}%</li>
                    <li><strong>Quantity:</strong> {{ $product->quantity }}</li>
                    <li><strong>Status:</strong> {{ $product->status }}</li>
                    <li><strong>Favourites:</strong> {{ $product->total_favorites }}</li>
                    <li><strong>Brand:</strong> {{ $product->brand }}</li>
                    <li><strong>Screen size:</strong> {{ $product->screen_size }}</li>
                    <li><strong>CPU:</strong> {{ $product->CPU }}</li>
                    <li><strong>RAM:</strong> {{ $product->RAM }}</li>
                    <li><strong>Storage:</strong> {{ $product->storage }}</li>
                    <li><strong>Event:</strong> {{ $product->event }}</li>
                </ul>

                @if(Auth::user()->role == 'admin')
                <a href="{{ route('product.edit', $product->product_id) }}" class="btn btn-primary">Edit Product</a>
                @elseif(Auth::user()->role == 'products_manager')
                <a href="{{ route('products_manager.product.edit', $product->product_id) }}" class="btn btn-primary">Edit Product</a>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection