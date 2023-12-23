<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RevenueController extends Controller
{
    public function showRevenueStatistics()
    {
        $revenueStatistics = [
            'Week' => $this->getTotalRevenueByPeriod('week'),
            'Month' => $this->getTotalRevenueByPeriod('month'),
            'Quarter' => $this->getTotalRevenueByPeriod('quarter'),
            'Year' => $this->getTotalRevenueByPeriod('year'),
        ];

        return view('admin.revenue', compact('revenueStatistics'));
    }

    private function getTotalRevenueByPeriod($period)
    {
        return DB::table('orders')
            ->select(
                DB::raw("DATE_FORMAT(created_at, '%Y-{$period}-%d') as period"),
                DB::raw('SUM(total) as totalRevenue')
            )
            ->groupBy('period')
            ->get()
            ->map(function ($result) {
                return [
                    'period' => $result->period ?? 'N/A',
                    'totalRevenue' => $result->totalRevenue ?? 0,
                ];
            });
    }
}
