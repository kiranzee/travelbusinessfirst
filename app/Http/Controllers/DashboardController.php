<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function topsales(){
        $highestSales = DB::table('ticket_enquiries')
                    ->join('users', 'ticket_enquiries.user_id', '=', 'users.id')
                    ->select(
                        'users.name as user_name',
                        'users.sales_target',
                        DB::raw('SUM(ticket_enquiries.sales_amount) as total_sales'),
                        DB::raw('ROUND(SUM(ticket_enquiries.sales_amount) / 1000, 1) as total_sales_in_k'),
                        DB::raw('ROUND((SUM(ticket_enquiries.sales_amount) / users.sales_target) * 100) as target_achievement')
                    )
                    ->where('ticket_enquiries.status', 'completed') // Only include completed statuses
                    ->whereMonth('ticket_enquiries.created_at', Carbon::now()->month)
                    ->whereYear('ticket_enquiries.created_at', Carbon::now()->year)
                    ->groupBy('users.id', 'users.name', 'users.sales_target')
                    ->orderBy('total_sales', 'desc')
                    ->first(); // Fetch only one record
    return view('layouts.dashboard', compact('highestSales'));

    }
}
