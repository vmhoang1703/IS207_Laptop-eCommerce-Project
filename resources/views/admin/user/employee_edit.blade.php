@extends('layouts.admin')

@section('title', 'Edit Employee')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Employee</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('employee.update', $employee->user_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $employee->email }}">
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}">
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <select name="role" class="form-control">
                    <option value="customer" {{ $employee->role == 'customer' ? 'selected' : '' }}>Customer</option>
                    <option value="admin" {{ $employee->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="employee" {{ $employee->role == 'employee' ? 'selected' : '' }}>Employee</option>
                    <option value="moderator" {{ $employee->role == 'moderator' ? 'selected' : '' }}>Moderator</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" name="date_of_birth" class="form-control" value="{{ $employee->date_of_birth }}">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" class="form-control">{{ $employee->address }}</textarea>
            </div>

            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" name="department" class="form-control" value="{{ $employee->department }}">
            </div>

            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" class="form-control" value="{{ $employee->position }}">
            </div>

            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="text" name="salary" class="form-control" value="{{ $employee->salary }}">
            </div>

            <div class="form-group">
                <label for="hire_date">Hire Date:</label>
                <input type="date" name="hire_date" class="form-control" value="{{ $employee->hire_date }}">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Employee</button>
        </form>
    </div>
</div>
@endsection