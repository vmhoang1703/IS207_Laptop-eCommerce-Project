@extends('layouts.admin')

@section('title', 'Products Management Page')

@section('content')
<!-- <h1>Welcome to my homepage!</h1> -->
<!-- Your page content goes here -->
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Products table</h1>
<p class="mb-4">
    <!-- DataTables is a third party plugin that is used to generate the
              demo table below. For more information about DataTables, please
              visit the -->
    <!-- <a target="_blank" href="https://datatables.net"
                >official DataTables documentation</a
              >. -->
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <!-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  DataTables Example
                </h6>
              </div> -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Added date</th>
                        <th>Modified date</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Added date</th>
                        <th>Modified date</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}$</td>
                        <td>{{ $product->stock_quantity }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>
                            <img src="{{ asset('img/delete.png') }}" alt="" width="20px" height="20px" />
                            &nbsp;
                            <a href="{{ route('product.edit', $product->product_id) }}">
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