@extends('layouts.admin')

@section('title', 'Add Category')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Add Category</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary mt-3">Add Category</button>
        </form>
    </div>
</div>
@endsection