@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Product</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('category.update', $category->category_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
            </div>

            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
</div>
@endsection