<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    //
    public function getTotalProductsDataByCategory()
    {
        $categories = Category::all();
        $data = [];

        foreach ($categories as $category) {
            $data['labels'][] = $category->title;
            $data['counts'][] = $category->total_products;
        }

        return response()->json($data);
    }

    public function getCustomerRegistrationData()
    {
        $customerRegistrations = User::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->get();

        $labels = $customerRegistrations->pluck('date')->toArray();
        $counts = $customerRegistrations->pluck('count')->toArray();

        return response()->json(compact('labels', 'counts'));
    }

    public function getCustomerKnownFromData()
    {
        $knownFromData = User::select('knownFrom', DB::raw('COUNT(*) as count'))
            ->whereIn('knownFrom', ['online', 'friend', 'advertising'])
            ->groupBy('knownFrom')
            ->get();

        $labels = $knownFromData->pluck('knownFrom');
        $counts = $knownFromData->pluck('count');

        return response()->json(compact('labels', 'counts'));
    }
    public function getEmployeeChartData()
    {
        $managerData = User::where('role', 'manager')->count();
        $productsManagerData = User::where('role', 'products_manager')->count();
        $salesData = User::where('role', 'sales')->count();
        $accountingData = User::where('role', 'accounting')->count();
        $marketingData = User::where('role', 'marketing')->count();
        $adminData = User::where('role', 'admin')->count();

        $departments = User::whereNotNull('department')->distinct('department')->pluck('department')->toArray();
        $departmentData = [];

        foreach ($departments as $department) {
            $departmentData[$department] = User::where('department', $department)
                ->whereNotNull('department') // Exclude records where department is null or empty
                ->selectRaw('COALESCE(COUNT(*), 0) as count')
                ->value('count');
        }

        $positions = User::whereNotNull('position')->distinct('position')->pluck('position')->toArray();
        $positionData = [];

        foreach ($positions as $position) {
            $positionData[$position] = User::where('position', $position)
                ->whereNotNull('position') // Exclude records where position is null or empty
                ->selectRaw('COALESCE(COUNT(*), 0) as count')
                ->value('count');
        }


        $averageSalary = User::where('role', 'employee')->avg('salary');
        $hireDateData = User::selectRaw('YEAR(hire_date) as year, COUNT(*) as count')
            ->groupByRaw('YEAR(hire_date)')
            ->get();

        return response()->json(compact(
            'managerData',
            'productsManagerData',
            'salesData',
            'accountingData',
            'marketingData',
            'adminData',
            'departmentData',
            'positionData',
            'averageSalary',
            'hireDateData'
        ));
    }

    public function getRevenueData()
    {
        // Retrieve revenue data from the database
        $revenueData = Order::selectRaw('DATE(created_at) as date, SUM(total) as total_revenue')
            ->groupBy('date')
            ->get();

        // Format data for the chart
        $labels = $revenueData->pluck('date')->toArray();
        $revenue = $revenueData->pluck('total_revenue')->toArray();

        return response()->json(compact('labels', 'revenue'));
    }

    public function getEarningsOverviewData()
    {
        $earningsData = Order::selectRaw('MONTH(created_at) as month, SUM(total) as earnings')
            ->where('status', 'Completed')
            ->groupByRaw('MONTH(created_at)')
            ->get();

        $labels = [];
        $earnings = [];

        foreach ($earningsData as $data) {
            $labels[] = Carbon::createFromDate(null, $data->month, null)->format('F');
            $earnings[] = $data->earnings;
        }

        return response()->json(compact('labels', 'earnings'));
    }
}
