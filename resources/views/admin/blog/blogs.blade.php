@extends('layouts.admin')

@section('title', 'Blogs Management Page')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Blogs table</h1>
<p class="mb-4"></p>

<!-- Add blog Button -->
@if(Auth::user()->role == 'admin')
<a href="{{ route('blog.create') }}" class="btn btn-success mb-4">Add Blog</a>
@elseif(Auth::user()->role == 'products_manager')
<a href="{{ route('blogs_manager.blog.create') }}" class="btn btn-success mb-4">Add Blog</a>
@endif

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Added date</th>
                        <th>Modified date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Added date</th>
                        <th>Modified date</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->blog_id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>
                            @foreach($categories as $category)
                            @if($category->category_id == $blog->category_id)
                            {{$category->title}}
                            @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($users as $user)
                            @if($user->user_id == $blog->user_id)
                            {{$user->name}}
                            @endif
                            @endforeach
                        </td>
                        <td>{{ $blog->created_at }}</td>
                        <td>{{ $blog->updated_at }}</td>
                        <td>
                            @if(Auth::user()->role == 'admin')
                            <a href="{{ route('blog.delete', $blog->blog_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/delete.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('blog.edit', $blog->blog_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/edit.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('blog.view', $blog->blog_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/show.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            @elseif(Auth::user()->role == 'products_manager')
                            <a href="{{ route('products_manager.blog.delete', $blog->blog_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/delete.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('products_manager.blog.edit', $blog->blog_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/edit.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('products_manager.blog.view', $blog->blog_id) }}" style="text-decoration: none;">
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