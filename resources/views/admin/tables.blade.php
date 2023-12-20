@extends('layouts.admin')

@section('title', 'Business Overview Tables')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Business Overview Tables</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Summary</h6>
            </div>
            <div class="card-body">
                <p>Description: This table provides a summary of key business metrics.</p>
                <table class="table table-bordered" id="summaryTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Ordinal Number</th>
                            <th>Table</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Categories</td>
                            <td>Information about categories.</td>
                            <td><a href="{{ route('categories.management') }}" class="btn btn-primary">View</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Products</td>
                            <td>Information about products.</td>
                            <td><a href="{{ route('products.management') }}" class="btn btn-primary">View</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Orders</td>
                            <td>Information about orders.</td>
                            <td><a href="{{ route('orders.management') }}" class="btn btn-primary">View</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Customers</td>
                            <td>Information about customers.</td>
                            <td><a href="{{ route('customers.management') }}" class="btn btn-primary">View</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Employees</td>
                            <td>Information about employees.</td>
                            <td><a href="{{ route('employees.management') }}" class="btn btn-primary">View</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Revenue</td>
                            <td>Revenue statistics.</td>
                            <td><a href="{{ route('revenue.management') }}" class="btn btn-primary">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection