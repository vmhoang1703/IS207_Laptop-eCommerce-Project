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
                <ul>
                    <li><strong>Email:</strong> {{ $employee->email }}</li>
                    <li><strong>Phone:</strong> {{ $employee->phone }}</li>
                    <li><strong>Date of Birth:</strong> {{ $employee->date_of_birth }}</li>
                    <li><strong>Address:</strong> {{ $employee->address }}</li>
                    <li><strong>Department:</strong> {{ $employee->department }}</li>
                    <li><strong>Position:</strong> {{ $employee->position }}</li>
                    <li><strong>Salary:</strong> {{ $employee->salary }}</li>
                    <li><strong>Hire Date:</strong> {{ $employee->hire_date }}</li>
                    <li><strong>Created at:</strong> {{ $employee->created_at }}</li>
                    <li><strong>Modified at:</strong> {{ $employee->updated_at }}</li>
                </ul>
            </div>
        </div>

        <a href="{{ route('employee.edit', $employee->user_id) }}" class="btn btn-primary">Edit Employee</a>
    </div>
</div>
@endsection