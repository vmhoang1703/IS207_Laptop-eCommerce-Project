@extends('layouts.admin')

@section('title', 'View Customer')

@section('content')
<h1 class="h3 mb-2 text-gray-800">View Customer</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h2>{{ $customer->name }}</h2>
                <ul>
                    <li><strong>Email:</strong> {{ $customer->email }}</li>
                    <li><strong>Known from:</strong> {{ $customer->knownFrom }}</li>
                    <li><strong>Adress:</strong> {{ $customer->address }}</li>
                    <li><strong>Phone number:</strong> {{ $customer->phone }}</li>
                    <li><strong>Joined at:</strong> {{ $customer->created_at }}</li>
                    <li><strong>Modified at:</strong> {{ $customer->updated_at }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection