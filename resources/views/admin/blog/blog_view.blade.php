@extends('layouts.admin')

@section('title', 'View Blog')

@section('content')
<h1 class="h3 mb-2 text-gray-800">View Blog</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                @if($blog->images->isNotEmpty())
                @foreach($blog->images as $image)
                <img src="{{ asset($image->image_path) }}" alt="{{ $blog->title }}" class="img-fluid" width="200px" height="200px">
                @endforeach
                @else
                <p>No images available</p>
                @endif
            </div>
            <div class="col-md-8">
                <h2>{{ $blog->title }}</h2>
                <ul>
                    <li><strong>Category:</strong>
                        @foreach($categories as $category)
                        @if($blog->category_id == $category->category_id)
                        {{ $category->title }}
                        @endif
                        @endforeach
                    </li>
                    <li><strong>Meta title:</strong> {{ $blog->meta_title }}</li>
                    <li><strong>Slug:</strong> {{ $blog->slug }}</li>
                    <li><strong>Summary:</strong> {{ $blog->summary }}</li>
                    <li><strong>Content:</strong> {!! $blog->content !!}</li>
                    <li><strong>Featured post:</strong> {{ $blog->featured_post }}</li>
                </ul>

                @if(Auth::user()->role == 'admin')
                <a href="{{ route('blog.edit', $blog->blog_id) }}" class="btn btn-primary">Edit Blog</a>
                @elseif(Auth::user()->role == 'products_manager')
                <a href="{{ route('products_manager.blog.edit', $blog->blog_id) }}" class="btn btn-primary">Edit Blog</a>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection