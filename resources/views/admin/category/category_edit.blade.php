@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Product</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        @if(Auth::user()->role == 'admin')
        <form action="{{ route('category.update', $category->category_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $category->title }}">
            </div>

            <div class="form-group">
                <label for="meta_title">Meta Title:</label>
                <input type="text" name="meta_title" class="form-control" value="{{ $category->meta_title }}">
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" class="form-control">{{ $category->content }}</textarea>
            </div>

            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
        @elseif(Auth::user()->role == 'products_manager')
        <form action="{{ route('products_manager.category.update', $category->category_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $category->title }}">
            </div>

            <div class="form-group">
                <label for="meta_title">Meta Title:</label>
                <input type="text" name="meta_title" class="form-control" value="{{ $category->meta_title }}">
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" class="form-control">{{ $category->content }}</textarea>
            </div>

            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
        @endif
    </div>
</div>
@endsection