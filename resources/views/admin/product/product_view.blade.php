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
                <p><strong>Category:</strong>
                    @foreach($categories as $category)
                    @if($product->category_id == $category->category_id)
                    {{ $category->title }}
                    @endif
                    @endforeach
                </p>
                <p><strong>Meta title:</strong> {{ $product->meta_title }}</p>
                <p><strong>Slug:</strong> {{ $product->slug }}</p>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Price:</strong> {{ $product->price }}$</p>
                <p><strong>Discount:</strong> {{ $product->discount }}%</p>
                <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
                <p><strong>Status:</strong> {{ $product->status }}</p>
                <p><strong>Favourites:</strong> {{ $product->total_favorites }}</p>
                <p><strong>Brand:</strong> {{ $product->brand }}</p>
                <p><strong>Screen size:</strong> {{ $product->screen_size }}</p>
                <p><strong>CPU:</strong> {{ $product->CPU }}</p>
                <p><strong>RAM:</strong> {{ $product->RAM }}</p>
                <p><strong>Storage:</strong> {{ $product->storage }}</p>
                <p><strong>Event:</strong> {{ $product->event }}</p>
                
                <a href="{{ route('product.edit', $product->product_id) }}" class="btn btn-primary">Edit Product</a>
            </div>
        </div>
    </div>
</div>

@endsection