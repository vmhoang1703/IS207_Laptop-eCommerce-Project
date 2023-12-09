@extends('layouts.admin')

@section('title', 'View Category')

@section('content')
<h1 class="h3 mb-2 text-gray-800">View Category</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $category->title }}</h2>
                <p><strong>Meta title:</strong> {{ $category->meta_title }}</p>
                <p><strong>Content:</strong> {{ $category->content }}</p>
                <p><strong>Slug:</strong> {{ $category->slug }}</p>
                <p><strong>Total products:</strong> {{ $category->total_products }}</p>
                <a href="{{ route('category.edit', $category->category_id) }}" class="btn btn-primary">Edit Category</a>
            </div>
        </div>
    </div>
</div>

@endsection