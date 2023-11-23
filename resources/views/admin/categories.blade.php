@extends('layouts.admin')

@section('title', 'Categories Management Page')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Categories table</h1>
<p class="mb-4"></p>

<!-- Add Category Button -->
<a href="{{ route('category.create') }}" class="btn btn-success mb-4">Add Category</a>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>The number of products</th>
                        <th>Added date</th>
                        <th>Modified date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>The number of products</th>
                        <th>Added date</th>
                        <th>Modified date</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->category_id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a href="{{ route('category.delete', $category->category_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/delete.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('category.edit', $category->category_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/edit.png') }}" alt="" width="20px" height="20px" />
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection