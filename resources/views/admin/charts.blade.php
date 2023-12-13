@extends('layouts.admin')

@section('title', 'Charts Page')

@section('content')
<!-- Hàng 1: Biểu đồ bar thống kê tổng số sản phẩm của từng loại -->
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Total Products by Category</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="totalProductsChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Customer Registration Trend</h6>
            </div>
            <div class="card-body">
                <div class="chart-line">
                    <canvas id="customerRegistrationChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Customer Known From</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4">
                    <canvas id="knownFromChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hàng 1: Biểu đồ cột thống kê số lượng nhân viên theo vai trò -->
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Employee Distribution by Role</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="roleChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hàng 2: Biểu đồ tròn thống kê số lượng nhân viên theo phòng ban -->
<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Employee Distribution by Department</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4">
                    <canvas id="departmentChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Biểu đồ tròn thống kê số lượng nhân viên theo vị trí -->
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Employee Distribution by Position</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4">
                    <canvas id="positionChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hàng 3: Biểu đồ cột thống kê lương trung bình -->
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Average Salary</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="averageSalaryChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hàng 4: Biểu đồ cột thống kê số lượng nhân viên theo năm tuyển dụng -->
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Employee Distribution by Hire Year</h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="hireDateChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection