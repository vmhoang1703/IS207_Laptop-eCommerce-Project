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
                <label for="category_id">Category</label>
                <select name="category_id" class="form-control">
                    <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>Laptop</option>
                    <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>Phụ kiện</option>
                    <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>PC</option>
                    <option value="4" {{ old('category_id') == 4 ? 'selected' : '' }}>Flash Sales</option>
                    <option value="5" {{ old('category_id') == 5 ? 'selected' : '' }}>None</option>
                </select>
            </div>

            <div class="form-group">
                <label for="screen_size">Screen Size</label>
                <select name="screen_size" class="form-control">
                    <option value="13inch" {{ old('screen_size') == '13inch' ? 'selected' : '' }}>Trên 13 inch</option>
                    <option value="14inch" {{ old('screen_size') == '14inch' ? 'selected' : '' }}>Trên 14 inch</option>
                    <option value="15inch" {{ old('screen_size') == '15inch' ? 'selected' : '' }}>Trên 15 inch</option>
                </select>
            </div>

            <div class="form-group">
                <label for="CPU">CPU</label>
                <select name="CPU" class="form-control">
                    <option value="intel celeron" {{ old('CPU') == 'intel celeron' ? 'selected' : '' }}>Intel celeron</option>
                    <option value="intel pentinum" {{ }}>intel pentinumn</option>
                    <option value="intel core i5" {{ }}>intel core i5</option>
                    <option value="intel core i7" {{ }}>intel core i7s</option>
                    <option value="amd ryzen 5" {{ }}>amd ryzen 5</option>
                    <option value="amd ryzen 7" {{ }}>amd ryzen 7</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control">
                    <option value="1" {{ }}>Laptop</option>
                    <option value="2" {{ }}>Phụ kiện</option>
                    <option value="3" {{ }}>PC</option>
                    <option value="4" {{ }}>Flash Sales</option>
                    <option value="5" {{ }}>None</option>
                </select>
            </div>

            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary mt-3">Add Product</button>
        </form>
    </div>
</div>
@endsection