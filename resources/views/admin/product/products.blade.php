@extends('layouts.admin')

@section('title', 'Products Management Page')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Products table</h1>
<p class="mb-4"></p>

<!-- Add Product Button -->
<a href="{{ route('product.create') }}" class="btn btn-success mb-4">Add Product</a>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Added date</th>
                        <th>Modified date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Added date</th>
                        <th>Modified date</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}$</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>
                            <a href="{{ route('product.delete', $product->product_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/delete.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('product.edit', $product->product_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/edit.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="{{ route('product.view', $product->product_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/show.png') }}" alt="" width="20px" height="20px" />
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