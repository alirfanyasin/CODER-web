<?php

namespace App\Http\Controllers\User;

use App\Charts\MonthlyContentChart;
use App\Http\Controllers\Controller;
use App\Models\Admin\Meet;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(MonthlyContentChart $chart)
    {
        $countTask = Task::where('division_id', Auth::user()->division_id)->get();
        $countMeeting = Meet::where('division_id', Auth::user()->division_id)->get();
        $meetingSchedule = Meet::where('division_id', Auth::user()->division_id)->get();

        return view('pages.app.dashboard', [
            'chart' => $chart->build(),
            'tasks' => $countTask,
            'meeting' => $countMeeting,
            'meetingSchedule' => $meetingSchedule
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
