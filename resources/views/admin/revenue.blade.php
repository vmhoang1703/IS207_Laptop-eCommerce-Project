@extends('layouts.admin')

@section('title', 'Revenue Statistics Page')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Revenue Statistics</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Period</th>
                        <th>Total Revenue</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($revenueStatistics as $stat)
                    <tr>
                        <td>{{ $stat['period'] }}</td>
                        <td>${{ number_format($stat['totalRevenue'], 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
