@extends('layouts.admin')

@section('title', 'Orders Management Page')

@section('content')
<!-- <h1>Welcome to my homepage!</h1> -->
<!-- Your page content goes here -->
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Orders table</h1>
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
                        <th>Ordinal Number</th>
                        <th>Id</th>
                        <th>Product name</th>
                        <th>Ordered date</th>
                        <th>Customer name</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Ordinal Number</th>
                        <th>Id</th>
                        <th>Product name</th>
                        <th>Ordered date</th>
                        <th>Customer name</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($orders as $index => $order)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->ordered_date }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->total }}</td>
                        <td>
                            <form action="{{ route('order.update', $order->order_id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="status" onchange="this.form.submit()">
                                    <option value="Preparing" {{ $order->status == 'Preparing' ? 'selected' : '' }}>Preparing</option>
                                    <option value="Shipping" {{ $order->status == 'Shipping' ? 'selected' : '' }}>Shipping</option>
                                    <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                </select>
                            </form>
                        </td>
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