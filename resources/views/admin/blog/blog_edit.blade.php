@extends('layouts.admin')

@section('title', 'Edit Blog')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Blog</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        @if(Auth::user()->role == 'admin')
        <form action="{{ route('blog.update', $blog->blog_id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="main_image">Main image:</label>
                <input type="file" name="main_image" id="main_image" accept="image/*" value="{{ old('main_image') }}">
            </div>

            <div class="form-group">
                <label for="images">Other images:</label>
                <input type="file" name="images[]" id="images" multiple accept="image/*" value="{{ old('images') }}">
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
            </div>

            <div class="form-group">
                <label for="meta_title">Meta title:</label>
                <input type="text" name="meta_title" class="form-control" value="{{ $blog->meta_title }}">
            </div>

            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->category_id }}" {{ $blog->category_id == $category->category_id ? 'selected' : '' }}>
                        {{ $category->title }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="summary">Summary:</label>
                <textarea name="summary" class="form-control">{{ $blog->summary }}</textarea>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="editor">{{ $blog->content }}</textarea>
            </div>

            <div class="form-group">
                <label>Featured Post:</label>
                <div class="form-check">
                    <input type="radio" name="featured_post" value="Yes" class="form-check-input" {{ old('featured_post', $blog->featured_post) == 'Yes' ? 'checked' : '' }}>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="featured_post" value="No" class="form-check-input" {{ old('featured_post', $blog->featured_post) == 'No' ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
        @elseif(Auth::user()->role == 'products_manager')
        <form action="{{ route('products_manager.product.update', $blog->product_id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="main_image">Main image:</label>
                <input type="file" name="main_image" id="main_image" accept="image/*" value="{{ old('main_image') }}">
            </div>

            <div class="form-group">
                <label for="images">Other images:</label>
                <input type="file" name="images[]" id="images" multiple accept="image/*" value="{{ old('images') }}">
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
            </div>

            <div class="form-group">
                <label for="meta_title">Meta title:</label>
                <input type="text" name="meta_title" class="form-control" value="{{ $blog->meta_title }}">
            </div>

            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->category_id }}" {{ $blog->category_id == $category->category_id ? 'selected' : '' }}>
                        {{ $category->title }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="summary">Summary:</label>
                <textarea name="summary" class="form-control">{{ $blog->summary }}</textarea>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="editor">{{ $blog->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update blog</button>
        </form>
        @endif
    </div>
</div>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection