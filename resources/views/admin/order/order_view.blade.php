@extends('layouts.admin')

@section('title', 'View Order')

@section('content')
<h1 class="h3 mb-2 text-gray-800">View Order</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h2>Order Information</h2>
                <ul>
                    <li><strong>Order ID:</strong> {{ $order->order_id }}</li>
                    <li><strong>Product ID:</strong> {{ $order->product_id }}</li>
                    <li><strong>User ID:</strong> {{ $order->user_id }}</li>
                    <li><strong>Status:</strong> {{ $order->status }}</li>
                    <li><strong>Subtotal:</strong> ${{ $order->subtotal }}</li>
                    <li><strong>Shipping:</strong> ${{ $order->shipping }}</li>
                    <li><strong>Total:</strong> ${{ $order->total }}</li>
                    <li><strong>Promo:</strong> ${{ $order->promo }}</li>
                    <li><strong>Discount:</strong> ${{ $order->discount }}</li>
                    <li><strong>Full Name:</strong> {{ $order->fullname }}</li>
                    <li><strong>Phone:</strong> {{ $order->phone }}</li>
                    <li><strong>Email:</strong> {{ $order->email }}</li>
                    <li><strong>Street Address:</strong> {{ $order->street_address }}</li>
                    <li><strong>Number Address:</strong> {{ $order->number_address }}</li>
                    <li><strong>City:</strong> {{ $order->city }}</li>
                    <li><strong>Province:</strong> {{ $order->province }}</li>
                    <li><strong>Note:</strong> {{ $order->note }}</li>
                </ul>
                @if(Auth::user()->role == 'admin')
                <a href="{{ route('order.edit', $order->order_id) }}" class="btn btn-primary">Edit Order</a>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
