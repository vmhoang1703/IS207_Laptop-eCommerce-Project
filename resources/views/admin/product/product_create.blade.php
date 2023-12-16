@extends('layouts.admin')

@section('title', 'Add Product')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Add Product</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        @if(Auth::user()->role == 'admin')
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <!-- Thêm input cho ảnh chính -->
            <div class="form-group">
                <label for="main_image">Main image:</label>
                <input type="file" name="main_image" id="main_image" accept="image/*" value="{{ old('main_image') }}">
            </div>

            <!-- Thêm input cho các ảnh khác -->
            <div class="form-group">
                <label for="images">Other images:</label>
                <input type="file" name="images[]" id="images" multiple accept="image/*" value="{{ old('images') }}">
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            </div>


            <div class="form-group">
                <label for="meta_title">Meta title:</label>
                <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="editor">{{ old('description') }}</textarea>
            </div>


            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" value="{{ old('price') }}">
            </div>

            <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="text" name="discount" class="form-control" value="{{ old('discount') }}">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" name="quantity" class="form-control" value="{{ old('quantity') }}">
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" class="form-control">
                    <option value="In stock" {{ old('status') == 'In stock' ? 'selected' : '' }}>In stock</option>
                    <option value="Up coming" {{ old('status') == 'Up coming' ? 'selected' : '' }}>Up coming</option>
                    <option value="Out stock" {{ old('status') == 'Out stock' ? 'selected' : '' }}>Out stock</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->category_id }}" {{ old('category_id') == $category->category_id ? 'selected' : '' }}>
                        {{ $category->title }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="brand">Brand:</label>
                <select name="brand" class="form-control">
                    <option value="Asus" {{ old('brand') == 'Asus' ? 'selected' : '' }}>Asus</option>
                    <option value="Dell" {{ old('brand') == 'Dell' ? 'selected' : '' }}>Dell</option>
                    <option value="HP" {{ old('brand') == 'HP' ? 'selected' : '' }}>HP</option>
                    <option value="Lenovo" {{ old('brand') == 'Lenovo' ? 'selected' : '' }}>Lenovo</option>
                    <option value="Samsung" {{ old('brand') == 'Samsung' ? 'selected' : '' }}>Samsung</option>
                </select>
            </div>

            <div class="form-group">
                <label for="screen_size">Screen Size:</label>
                <select name="screen_size" class="form-control">
                    <option value="13 inch" {{ old('screen_size') == '13 inch' ? 'selected' : '' }}>13 inch</option>
                    <option value="14 inch" {{ old('screen_size') == '14 inch' ? 'selected' : '' }}>14 inch</option>
                    <option value="Over 15 inch" {{ old('screen_size') == 'Over 15 inch' ? 'selected' : '' }}>Over 15 inch</option>
                </select>
            </div>

            <div class="form-group">
                <label for="CPU">CPU:</label>
                <select name="CPU" class="form-control">
                    <option value="Intel Celeron" {{ old('CPU') == 'Intel Celeron' ? 'selected' : '' }}>Intel Celeron</option>
                    <option value="Intel Pentinum" {{ old('CPU') == 'Intel Pentinum' ? 'selected' : '' }}>Intel Pentinum</option>
                    <option value="Intel Core i5" {{ old('CPU') == 'Intel Core i5' ? 'selected' : '' }}>Intel Core i5</option>
                    <option value="Intel Core i7" {{ old('CPU') == 'Intel Core i7' ? 'selected' : '' }}>Intel Core i7</option>
                    <option value="AMD Ryzen 5" {{ old('CPU') == 'AMD Ryzen 5' ? 'selected' : '' }}>AMD Ryzen 5</option>
                    <option value="AMD Ryzen 7" {{ old('CPU') == 'AMD Ryzen 7' ? 'selected' : '' }}>AMD Ryzen 7</option>
                </select>
            </div>

            <div class="form-group">
                <label for="RAM">RAM:</label>
                <select name="RAM" class="form-control">
                    <option value="4GB" {{ old('RAM') == '4GB' ? 'selected' : '' }}>4GB</option>
                    <option value="8GB" {{ old('RAM') == '8GB' ? 'selected' : '' }}>8GB</option>
                    <option value="16GB" {{ old('RAM') == '16GB' ? 'selected' : '' }}>16GB</option>
                    <option value="32GB" {{ old('RAM') == '32GB' ? 'selected' : '' }}>32GB</option>
                    <option value="64GB" {{ old('RAM') == '64GB' ? 'selected' : '' }}>64GB</option>
                </select>
            </div>

            <div class="form-group">
                <label for="storage">Storage:</label>
                <select name="storage" class="form-control">
                    <option value="SSD 1TB" {{ old('storage') == 'SSD 1TB' ? 'selected' : '' }}>SSD 1TB</option>
                    <option value="SSD 512GB" {{ old('storage') == 'SSD 512GB' ? 'selected' : '' }}>SSD 512GB</option>
                    <option value="SSD 256GB" {{ old('storage') == 'SSD 256GB' ? 'selected' : '' }}>SSD 256GB</option>
                    <option value="SSD 128GB" {{ old('storage') == 'SSD 128GB' ? 'selected' : '' }}>SSD 128GB</option>
                </select>
            </div>

            <div class="form-group">
                <label for="event">Event:</label>
                <select name="event" class="form-control">
                    <option value="none" {{ old('event') == 'None' ? 'selected' : '' }}>None</option>
                    <option value="Flash Sales" {{ old('event') == 'Flash Sales' ? 'selected' : '' }}>Flash Sales</option>
                </select>
            </div>
            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary mt-3">Add Product</button>
        </form>
        @elseif(Auth::user()->role == 'products_manager')
        <form action="{{ route('products_manager.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <!-- Thêm input cho ảnh chính -->
            <div class="form-group">
                <label for="main_image">Main image:</label>
                <input type="file" name="main_image" id="main_image" accept="image/*" value="{{ old('main_image') }}">
            </div>

            <!-- Thêm input cho các ảnh khác -->
            <div class="form-group">
                <label for="images">Other images:</label>
                <input type="file" name="images[]" id="images" multiple accept="image/*" value="{{ old('images') }}">
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            </div>


            <div class="form-group">
                <label for="meta_title">Meta title:</label>
                <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="editor">{{ old('description') }}</textarea>
            </div>


            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" value="{{ old('price') }}">
            </div>

            <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="text" name="discount" class="form-control" value="{{ old('discount') }}">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" name="quantity" class="form-control" value="{{ old('quantity') }}">
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" class="form-control">
                    <option value="In stock" {{ old('status') == 'In stock' ? 'selected' : '' }}>In stock</option>
                    <option value="Up coming" {{ old('status') == 'Up coming' ? 'selected' : '' }}>Up coming</option>
                    <option value="Out stock" {{ old('status') == 'Out stock' ? 'selected' : '' }}>Out stock</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->category_id }}" {{ old('category_id') == $category->category_id ? 'selected' : '' }}>
                        {{ $category->title }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="brand">Brand:</label>
                <select name="brand" class="form-control">
                    <option value="Asus" {{ old('brand') == 'Asus' ? 'selected' : '' }}>Asus</option>
                    <option value="Dell" {{ old('brand') == 'Dell' ? 'selected' : '' }}>Dell</option>
                    <option value="HP" {{ old('brand') == 'HP' ? 'selected' : '' }}>HP</option>
                    <option value="Lenovo" {{ old('brand') == 'Lenovo' ? 'selected' : '' }}>Lenovo</option>
                    <option value="Samsung" {{ old('brand') == 'Samsung' ? 'selected' : '' }}>Samsung</option>
                </select>
            </div>

            <div class="form-group">
                <label for="screen_size">Screen Size:</label>
                <select name="screen_size" class="form-control">
                    <option value="13 inch" {{ old('screen_size') == '13 inch' ? 'selected' : '' }}>13 inch</option>
                    <option value="14 inch" {{ old('screen_size') == '14 inch' ? 'selected' : '' }}>14 inch</option>
                    <option value="Over 15 inch" {{ old('screen_size') == 'Over 15 inch' ? 'selected' : '' }}>Over 15 inch</option>
                </select>
            </div>

            <div class="form-group">
                <label for="CPU">CPU:</label>
                <select name="CPU" class="form-control">
                    <option value="Intel Celeron" {{ old('CPU') == 'Intel Celeron' ? 'selected' : '' }}>Intel Celeron</option>
                    <option value="Intel Pentinum" {{ old('CPU') == 'Intel Pentinum' ? 'selected' : '' }}>Intel Pentinum</option>
                    <option value="Intel Core i5" {{ old('CPU') == 'Intel Core i5' ? 'selected' : '' }}>Intel Core i5</option>
                    <option value="Intel Core i7" {{ old('CPU') == 'Intel Core i7' ? 'selected' : '' }}>Intel Core i7</option>
                    <option value="AMD Ryzen 5" {{ old('CPU') == 'AMD Ryzen 5' ? 'selected' : '' }}>AMD Ryzen 5</option>
                    <option value="AMD Ryzen 7" {{ old('CPU') == 'AMD Ryzen 7' ? 'selected' : '' }}>AMD Ryzen 7</option>
                </select>
            </div>

            <div class="form-group">
                <label for="RAM">RAM:</label>
                <select name="RAM" class="form-control">
                    <option value="4GB" {{ old('RAM') == '4GB' ? 'selected' : '' }}>4GB</option>
                    <option value="8GB" {{ old('RAM') == '8GB' ? 'selected' : '' }}>8GB</option>
                    <option value="16GB" {{ old('RAM') == '16GB' ? 'selected' : '' }}>16GB</option>
                    <option value="32GB" {{ old('RAM') == '32GB' ? 'selected' : '' }}>32GB</option>
                    <option value="64GB" {{ old('RAM') == '64GB' ? 'selected' : '' }}>64GB</option>
                </select>
            </div>

            <div class="form-group">
                <label for="storage">Storage:</label>
                <select name="storage" class="form-control">
                    <option value="SSD 1TB" {{ old('storage') == 'SSD 1TB' ? 'selected' : '' }}>SSD 1TB</option>
                    <option value="SSD 512GB" {{ old('storage') == 'SSD 512GB' ? 'selected' : '' }}>SSD 512GB</option>
                    <option value="SSD 256GB" {{ old('storage') == 'SSD 256GB' ? 'selected' : '' }}>SSD 256GB</option>
                    <option value="SSD 128GB" {{ old('storage') == 'SSD 128GB' ? 'selected' : '' }}>SSD 128GB</option>
                </select>
            </div>

            <div class="form-group">
                <label for="event">Event:</label>
                <select name="event" class="form-control">
                    <option value="None" {{ old('event') == 'None' ? 'selected' : '' }}>None</option>
                    <option value="Flash Sales" {{ old('event') == 'Flash Sales' ? 'selected' : '' }}>Flash Sales</option>
                </select>
            </div>
            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary mt-3">Add Product</button>
        </form>
        @endif
    </div>
</div>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection
