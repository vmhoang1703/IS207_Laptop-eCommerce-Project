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
                    <p><strong>Email:</strong> {{ $customer->email }}</p>
                    <p><strong>Known from:</strong> {{ $customer->knownFrom }}</p>
                    <p><strong>Joined at:</strong> {{ $customer->created_at }}</p>
                    <p><strong>Modified at:</strong> {{ $customer->updated_at }}</p>
                </div>
            </div>

            <a href="{{ route('customers.edit', $customer->user_id) }}" class="btn btn-primary">Edit customer</a>
        </div>
    </div>
@endsection
