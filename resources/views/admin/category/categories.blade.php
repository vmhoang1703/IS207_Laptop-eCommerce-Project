@extends('layouts.admin')

@section('title', 'Categories Management Page')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Categories table</h1>
<p class="mb-4"></p>

<!-- Add Category Button -->
@if(Auth::user()->role == 'admin')
<a href="{{ route('category.create') }}" class="btn btn-success mb-4">Add Category</a>
@elseif(Auth::user()->role == 'products_manager')
<a href="{{ route('products_manager.category.create') }}" class="btn btn-success mb-4">Add Category</a>
@endif

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Total products</th>
                        <th>Added date</th>
                        <th>Modified date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Total products</th>
                        <th>Added date</th>
                        <th>Modified date</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->category_id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->total_products }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            @if(Auth::user()->role == 'admin')
                            <a href="{{ route('category.delete', $category->category_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/delete.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('category.edit', $category->category_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/edit.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('category.view', $category->category_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/show.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            @elseif(Auth::user()->role == 'products_manager')
                            <a href="{{ route('products_manager.category.delete', $category->category_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/delete.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('products_manager.category.edit', $category->category_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/edit.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('products_manager.category.view', $category->category_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/show.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection