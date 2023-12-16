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
                <ul>
                    <li><strong>Meta title:</strong> {{ $category->meta_title }}</li>
                    <li><strong>Content:</strong> {{ $category->content }}</li>
                    <li><strong>Slug:</strong> {{ $category->slug }}</li>
                    <li><strong>Total products:</strong> {{ $category->total_products }}</li>
                </ul>
                @if(Auth::user()->role == 'admin')
                <a href="{{ route('category.edit', $category->category_id) }}" class="btn btn-primary">Edit Category</a>
                @elseif(Auth::user()->role == 'products_manager')
                <a href="{{ route('products_manager.category.edit', $category->category_id) }}" class="btn btn-primary">Edit Category</a>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection