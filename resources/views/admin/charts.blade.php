@extends('layouts.admin')

@section('title', 'Charts Page')

@section('content')
<!-- Tabs -->
<ul class="nav nav-tabs" id="myTabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="categories-tab" data-toggle="tab" href="#categories-content" role="tab" aria-controls="categories" aria-selected="true">Categories</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="products-tab" data-toggle="tab" href="#products-content" role="tab" aria-controls="products" aria-selected="false">Products</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders-content" role="tab" aria-controls="orders" aria-selected="false">Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="customers-tab" data-toggle="tab" href="#customers-content" role="tab" aria-controls="customers" aria-selected="false">Customers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="employees-tab" data-toggle="tab" href="#employees-content" role="tab" aria-controls="employees-tab" aria-selected="false">Employees</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="revenue-tab" data-toggle="tab" href="#revenue-content" role="tab" aria-controls="revenue-tab" aria-selected="false">Revenue</a>
    </li>
</ul>


<div class="tab-content" id="myTabsContent">
    <!-- Categories Tab Content -->
    <div class="tab-pane fade show active" id="categories-content" role="tabpanel" aria-labelledby="categories-tab">
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
    </div>

    <!-- Products Tab Content -->
    <div class="tab-pane fade" id="products-content" role="tabpanel" aria-labelledby="products-tab">
        <!-- Hàng 1: Biểu đồ bar thống kê tổng số sản phẩm -->
        <div class="row">
            <!-- ... -->
        </div>
    </div>

    <!-- Orders Tab Content -->
    <div class="tab-pane fade" id="orders-content" role="tabpanel" aria-labelledby="orders-tab">
        <!-- Hàng 1: Biểu đồ bar thống kê số lượng đơn hàng -->
        <div class="row">
            <!-- ... -->
        </div>
    </div>

    <!-- Customers Tab Content -->
    <div class="tab-pane fade" id="customers-content" role="tabpanel" aria-labelledby="customers-tab">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Customer Registration Trend</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-line" style="height: 300px;">
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
    </div>

    <!-- Employees Tab Content -->
    <div class="tab-pane fade" id="employees-content" role="tabpanel" aria-labelledby="employees-tab">
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

        <!-- Hàng 3: Biểu đồ cột thống kê lương trung bình
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
        </div> -->

        <!-- Hàng 4: Biểu đồ cột thống kê số lượng nhân viên theo năm tuyển dụng -->
        <!-- <div class="row">
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
        </div> -->
    </div>

    <!-- Revenue Tab Content -->
    <div class="tab-pane fade" id="revenue-content" role="tabpanel" aria-labelledby="revenue-tab">
        <!-- Hàng 1: Biểu đồ đường thống kê doanh thu -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Revenue Statistics</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-line" style="height: 300px;">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Xử lý sự kiện khi tab được chọn
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            var targetTab = $(e.target).attr("href"); // Tab đang được chọn

            // Lưu tab đang được chọn vào localStorage
            localStorage.setItem('activeTab', targetTab);
        });

        // Kiểm tra nếu có tab đã được lưu trữ trong localStorage
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            // Kích hoạt tab được lưu trữ
            $('#myTabs a[href="' + activeTab + '"]').tab('show');
        }
    });
</script>

<!-- CSS để tránh sự nhấp nháy -->
<style>
    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }
</style>
@endsection
@endsection