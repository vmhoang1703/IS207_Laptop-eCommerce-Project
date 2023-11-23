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
                    @foreach($categories as $category)
                    <option value="{{ $category->category_id }}" {{ $product->category_id == $category->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="screen_size">Screen Size:</label>
                <select name="screen_size" class="form-control">
                    <option value="13 inch" {{ $product->screen_size == '13 inch' ? 'selected' : '' }}>13 inch</option>
                    <option value="14 inch" {{ $product->screen_size == '14 inch' ? 'selected' : '' }}>14 inch</option>
                    <option value="Over 15 inch" {{ $product->screen_size == 'Over 15 inch' ? 'selected' : '' }}>Over 15 inch</option>
                </select>
            </div>

            <div class="form-group">
                <label for="CPU">CPU:</label>
                <select name="CPU" class="form-control">
                    <option value="Intel Celeron" {{ $product->CPU == 'Intel Celeron' ? 'selected' : '' }}>Intel Celeron</option>
                    <option value="Intel Pentium" {{ $product->CPU == 'Intel Pentium' ? 'selected' : '' }}>Intel Pentium</option>
                    <option value="Intel Core i5" {{ $product->CPU == 'Intel Core i5' ? 'selected' : '' }}>Intel Core i5</option>
                    <option value="Intel Core i7" {{ $product->CPU == 'Intel Core i7' ? 'selected' : '' }}>Intel Core i7</option>
                    <option value="AMD Ryzen 5" {{ $product->CPU == 'AMD Ryzen 5' ? 'selected' : '' }}>AMD Ryzen 5</option>
                    <option value="AMD Ryzen 7" {{ $product->CPU == 'AMD Ryzen 7' ? 'selected' : '' }}>AMD Ryzen 7</option>
                </select>
            </div>

            <div class="form-group">
                <label for="RAM">RAM:</label>
                <select name="RAM" class="form-control">
                    <option value="4GB" {{ $product->RAM == '4GB' ? 'selected' : '' }}>4GB</option>
                    <option value="8GB" {{ $product->RAM == '8GB' ? 'selected' : '' }}>8GB</option>
                    <option value="16GB" {{ $product->RAM == '16GB' ? 'selected' : '' }}>16GB</option>
                    <option value="32GB" {{ $product->RAM == '32GB' ? 'selected' : '' }}>32GB</option>
                    <option value="64GB" {{ $product->RAM == '64GB' ? 'selected' : '' }}>64GB</option>
                </select>
            </div>

            <div class="form-group">
                <label for="storage">Storage:</label>
                <select name="storage" class="form-control">
                    <option value="SSD 1TB" {{ $product->storage == 'SSD 1TB' ? 'selected' : '' }}>SSD 1TB</option>
                    <option value="SSD 512GB" {{ $product->storage == 'SSD 512GB' ? 'selected' : '' }}>SSD 512GB</option>
                    <option value="SSD 256GB" {{ $product->storage == 'SSD 256GB' ? 'selected' : '' }}>SSD 256GB</option>
                    <option value="SSD 128GB" {{ $product->storage == 'SSD 128GB' ? 'selected' : '' }}>SSD 128GB</option>
                </select>
            </div>

            <div class="form-group">
                <label for="event">Event:</label>
                <select name="event" class="form-control">
                    <option value="None" {{ $product->event == 'None' ? 'selected' : '' }}>None</option>
                    <option value="Flash Sales" {{ $product->event == 'Flash Sales' ? 'selected' : '' }}>Flash Sales</option>
                </select>
            </div>


            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</div>
@endsection