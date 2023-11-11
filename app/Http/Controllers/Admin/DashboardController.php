<?php

namespace App\Http\Controllers\Admin;

use App\Charts\MonthlyContentChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(MonthlyContentChart $chart)
    {
        return view('pages.app.dashboard', ['chart' => $chart->build()]);
    }
}
