@extends('layouts.admin')

@section('title', 'View Employee')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">View Employee</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h2>{{ $employee->name }}</h2>
                    <p><strong>Email:</strong> {{ $employee->email }}</p>
                    <p><strong>Phone:</strong> {{ $employee->phone }}</p>
                    <p><strong>Date of Birth:</strong> {{ $employee->date_of_birth }}</p>
                    <p><strong>Address:</strong> {{ $employee->address }}</p>
                    <p><strong>Department:</strong> {{ $employee->department }}</p>
                    <p><strong>Position:</strong> {{ $employee->position }}</p>
                    <p><strong>Salary:</strong> {{ $employee->salary }}</p>
                    <p><strong>Hire Date:</strong> {{ $employee->hire_date }}</p>
                    <p><strong>Created at:</strong> {{ $employee->created_at }}</p>
                    <p><strong>Modified at:</strong> {{ $employee->updated_at }}</p>
                </div>
            </div>

            <a href="{{ route('employee.edit', $employee->user_id) }}" class="btn btn-primary">Edit Employee</a>
        </div>
    </div>
@endsection
