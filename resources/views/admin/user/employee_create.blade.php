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
                    @if(Auth::user()->role == 'admin')
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    @endif
                    <option value="products_manager">Products Manager (Categories, Products, Blogs)</option>
                    <option value="sales">Sales (Orders, Customer)</option>
                    <option value="accounting">Accounting (Revenue)</option>
                    <option value="marketing">Marketing (Customer)</option>
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
                <select name="department" class="form-control">
                    <option value="business">Business Department </option>
                    <option value="production">Production Department</option>
                    <option value="marketing">Marketing Department</option>
                    <option value="finance">Finance Department</option>
                </select>
            </div>

            <div class="form-group" id="positionGroup">
                <label for="position">Position:</label>
                <select name="position" class="form-control">
                </select>
            </div>

            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="text" name="salary" class="form-control" value="{{ old('salary') }}">
            </div>

            <div class="form-group">
                <label for="hire_date">Hire Date:</label>
                <input type="date" name="hire_date" class="form-control" value="{{ old('hire_date') }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add Employee</button>
        </form>
    </div>
</div>
<script>
    // Lắng nghe sự kiện khi giá trị của dropdown "Department" thay đổi
    document.addEventListener('DOMContentLoaded', function() {
        var departmentDropdown = document.querySelector('select[name="department"]');
        var positionDropdown = document.querySelector('select[name="position"]');
        var positionGroup = document.getElementById('positionGroup');

        // Thiết lập các vị trí cho từng phòng ban
        var positions = {
            'business': ['Manager', 'Sales Representative', 'Customer Service'],
            'production': ['Warehouse Manager', 'Production Worker'],
            'marketing': ['Marketing Manager', 'Content Creator'],
            'finance': ['Accountant', 'Financial Analyst'],
        };

        // Hàm cập nhật nội dung của dropdown "Position"
        function updatePositionDropdown() {
            var selectedDepartment = departmentDropdown.value;
            var departmentPositions = positions[selectedDepartment] || [];

            // Xóa tất cả các option cũ
            positionDropdown.innerHTML = '';

            // Thêm các option mới
            departmentPositions.forEach(function(position) {
                var option = document.createElement('option');
                option.value = position;
                option.text = position;
                positionDropdown.appendChild(option);
            });
        }

        // Gọi hàm cập nhật ban đầu
        updatePositionDropdown();

        // Lắng nghe sự kiện khi giá trị của dropdown "Department" thay đổi
        departmentDropdown.addEventListener('change', function() {
            updatePositionDropdown();
        });
    });
</script>

@endsection