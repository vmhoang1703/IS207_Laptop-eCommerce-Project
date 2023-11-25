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
                <img src="{{ asset($image->image_path) }}" alt="{{ $product->name }}" class="img-fluid" width="200px" height="200px">
                @endforeach
                @else
                <p>No images available</p>
                @endif
            </div>
            <div class="col-md-6">
                <h2>{{ $product->name }}</h2>
                <p><strong>Category:</strong>
                    @foreach($categories as $category)
                    @if($product->category_id == $category->category_id)
                    {{ $category->name }}
                    @endif
                    @endforeach
                </p>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Price:</strong> {{ $product->price }}$</p>
                <p><strong>Old Price:</strong> {{ $product->oldPrice }}$</p>
                <p><strong>Discount:</strong> {{ $product->discount }}%</p>
                <p><strong>Stock Quantity:</strong> {{ $product->stock_quantity }}</p>
                <p><strong>Favourites:</strong> {{ $product->total_favourite_count }}</p>
                <p><strong>Screen size:</strong> {{ $product->screen_size }}</p>
                <p><strong>CPU:</strong> {{ $product->CPU }}</p>
                <p><strong>RAM:</strong> {{ $product->RAM }}</p>
                <p><strong>Storage:</strong> {{ $product->storage }}</p>

                <!-- <p><strong>Favourites:</strong> {{ $product->total_favourite_count }}</p> -->
                <!-- Add other product details based on your model's attributes -->

                <!-- You can also add an "Edit" button that links to the edit page -->
                <a href="{{ route('product.edit', $product->product_id) }}" class="btn btn-primary">Edit Product</a>
            </div>
        </div>
    </div>
</div>

@endsection