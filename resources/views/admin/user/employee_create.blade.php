@extends('layouts.admin')

@section('title', 'Add Employee')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Add Employee</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <select name="role" class="form-control">
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                    <option value="moderator">Moderator</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" class="form-control">{{ old('address') }}</textarea>
            </div>

            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" name="department" class="form-control" value="{{ old('department') }}">
            </div>

            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" class="form-control" value="{{ old('position') }}">
            </div>

            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="text" name="salary" class="form-control" value="{{ old('salary') }}">
            </div>

            <div class="form-group">
                <label for="hire_date">Hire Date:</label>
                <input type="date" name="hire_date" class="form-control" value="{{ old('hire_date') }}">
            </div>

            <!-- Add other form fields based on your model's $fillable attributes -->

            <button type="submit" class="btn btn-primary mt-3">Add Employee</button>
        </form>
    </div>
</div>
@endsection