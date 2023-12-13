<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
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
        $employeeData = User::where('role', 'employee')->count();
        $moderatorData = User::where('role', 'moderator')->count();
        $adminData = User::where('role', 'admin')->count();

        $departments = User::distinct('department')->pluck('department')->toArray();
        $departmentData = [];

        foreach ($departments as $department) {
            $departmentData[$department] = User::where('department', $department)->count();
        }

        $positions = User::distinct('position')->pluck('position')->toArray();
        $positionData = [];

        foreach ($positions as $position) {
            $positionData[$position] = User::where('position', $position)->count();
        }

        $averageSalary = User::where('role', 'employee')->avg('salary');
        $hireDateData = User::selectRaw('YEAR(hire_date) as year, COUNT(*) as count')
            ->groupByRaw('YEAR(hire_date)')
            ->get();

        return response()->json(compact(
            'employeeData',
            'moderatorData',
            'adminData',
            'departmentData',
            'positionData',
            'averageSalary',
            'hireDateData'
        ));
    }
}
