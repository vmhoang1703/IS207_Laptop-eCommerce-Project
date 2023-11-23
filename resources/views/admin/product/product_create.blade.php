@extends('layouts.admin')

@section('title', 'Add Product')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Add Product</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="images">Hình ảnh sản phẩm:</label>
                <input type="file" name="images[]" id="images" multiple accept="image/*" value="{{ old('images') }}">
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" value="{{ old('price') }}">
            </div>

            <div class="form-group">
                <label for="oldPrice">Old Price:</label>
                <input type="text" name="oldPrice" class="form-control" value="{{ old('oldPrice') }}">
            </div>

            <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="text" name="discount" class="form-control" value="{{ old('discount') }}">
            </div>

            <div class="form-group">
                <label for="stock_quantity">Stock Quantity:</label>
                <input type="text" name="stock_quantity" class="form-control" value="{{ old('stock_quantity') }}">
            </div>

            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control">
                    <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>Laptop</option>
                    <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>Power banks</option>
                    <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>Cables, chargers</option>
                    <option value="4" {{ old('category_id') == 4 ? 'selected' : '' }}>Phone cases</option>
                    <option value="5" {{ old('category_id') == 5 ? 'selected' : '' }}>Speakers</option>
                    <option value="6" {{ old('category_id') == 6 ? 'selected' : '' }}>Headphones</option>
                    <option value="7" {{ old('category_id') == 7 ? 'selected' : '' }}>Printers</option>
                    <option value="8" {{ old('category_id') == 8 ? 'selected' : '' }}>Printer ink</option>
                    <option value="9" {{ old('category_id') == 9 ? 'selected' : '' }}>Monitor</option>
                    <option value="10" {{ old('category_id') == 10 ? 'selected' : '' }}>Gaming PC</option>
                </select>
            </div>

            <div class="form-group">
                <label for="screen_size">Screen Size:</label>
                <select name="screen_size" class="form-control">
                    <option value="13 inch" {{ old('screen_size') == '13inch' ? 'selected' : '' }}>13 inch</option>
                    <option value="14 inch" {{ old('screen_size') == '14inch' ? 'selected' : '' }}>14 inch</option>
                    <option value="over 15 inch" {{ old('screen_size') == '15inch' ? 'selected' : '' }}>Over 15 inch</option>
                </select>
            </div>

            <div class="form-group">
                <label for="CPU">CPU:</label>
                <select name="CPU" class="form-control">
                    <option value="intel celeron" {{ old('CPU') == 'intel celeron' ? 'selected' : '' }}>Intel celeron</option>
                    <option value="intel pentinum" {{ old('CPU') == 'intel pentinum' ? 'selected' : '' }}>Intel pentinum</option>
                    <option value="intel core i5" {{ old('CPU') == 'intel core i5' ? 'selected' : '' }}>Intel Core i5</option>
                    <option value="intel core i7" {{ old('CPU') == 'intel core i7' ? 'selected' : '' }}>Intel Core i7</option>
                    <option value="amd ryzen 5" {{ old('CPU') == 'amd ryzen 5' ? 'selected' : '' }}>AMD Ryzen 5</option>
                    <option value="amd ryzen 7" {{ old('CPU') == 'amd ryzen 7' ? 'selected' : '' }}>AMD Ryzen 7</option>
                </select>
            </div>

            <div class="form-group">
                <label for="RAM">RAM:</label>
                <select name="RAM" class="form-control">
                    <option value="4gb" {{ old('RAM') == '4gb' ? 'selected' : '' }}>4GB</option>
                    <option value="8gb" {{ old('RAM') == '8gb' ? 'selected' : '' }}>8GB</option>
                    <option value="16gb" {{ old('RAM') == '16gb' ? 'selected' : '' }}>16GB</option>
                    <option value="32gb" {{ old('RAM') == '32gb' ? 'selected' : '' }}>32GB</option>
                    <option value="64gb" {{ old('RAM') == '64gb' ? 'selected' : '' }}>64GB</option>
                </select>
            </div>

            <div class="form-group">
                <label for="hard_disk_drive">Hard disk drive:</label>
                <select name="hard_disk_drive" class="form-control">
                    <option value="ssd 1tb" {{ old('hard_disk_drive') == 'ssd 1tb' ? 'selected' : '' }}>SSD 1TB</option>
                    <option value="ssd 512gb" {{ old('hard_disk_drive') == 'ssd 512gb' ? 'selected' : '' }}>SSD 512GB</option>
                    <option value="ssd 256gb" {{ old('hard_disk_drive') == 'ssd 256gb' ? 'selected' : '' }}>SSD 256GB</option>
                    <option value="ssd 128gb" {{ old('hard_disk_drive') == 'ssd 128gb' ? 'selected' : '' }}>SSD 128GB</option>
                </select>
            </div>

            <div class="form-group">
                <label for="event">Event:</label>
                <select name="event" class="form-control">
                    <option value="none" {{ old('event') == 'flash sales' ? 'selected' : '' }}>None</option>
                    <option value="flash sales" {{ old('event') == 'none' ? 'selected' : '' }}>Flash Sales</option>
                </select>
            </div>
            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary mt-3">Add Product</button>
        </form>
    </div>
</div>
@endsection