@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Product</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('product.update', $product->product_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" value="{{ $product->price }}">
            </div>

            <div class="form-group">
                <label for="oldPrice">Old Price:</label>
                <input type="text" name="oldPrice" class="form-control" value="{{ $product->oldPrice }}">
            </div>

            <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="text" name="discount" class="form-control" value="{{ $product->discount }}">
            </div>

            <div class="form-group">
                <label for="stock_quantity">Stock Quantity:</label>
                <input type="text" name="stock_quantity" class="form-control" value="{{ $product->stock_quantity }}">
            </div>

            <div class="form-group">
                    <label for="category_id">Category:</label>
                    <select name="category_id" class="form-control">
                        <option value="1" {{ $product->category_id == 1 ? 'selected' : '' }}>Laptop</option>
                        <option value="2" {{ $product->category_id == 2 ? 'selected' : '' }}>Phụ kiện</option>
                        <option value="3" {{ $product->category_id == 3 ? 'selected' : '' }}>PC</option>
                        <option value="4" {{ $product->category_id == 4 ? 'selected' : '' }}>Flash Sales</option>
                        <option value="5" {{ $product->category_id == 5 ? 'selected' : '' }}>None</option>
                    </select>
                </div>

            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</div>
@endsection