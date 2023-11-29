<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Presence;
use App\Models\Submission;
use App\Models\User;
use App\Models\UserPresence;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.app.users', [
            'data' => User::all()
        ]);
    }



    public function profile($uuid, $id, $name)
    {
        $data = User::where(['id' => $id, 'name' => $name])->first();
        $dataPresence = UserPresence::where('user_id', $id)->get();
        $dataSubmission = Submission::where('user_id', $id)->get();

        $totalPointSubmission = $dataSubmission->sum('point');
        $totalPointPresence = $dataPresence->sum('point');
        $totalPoint = $totalPointSubmission + $totalPointPresence;

        $meeting = Presence::all();

        $totalPresence = $dataPresence->where('status', 'Hadir')->count();
        $totalMeetings = $meeting->count();

        // if ($totalMeetings > 0) {
        //     $attendancePercentage = ($totalPresence / $totalMeetings) * 100;
        // } else {
        //     $attendancePercentage = 0;
        // }

        return view('pages.app.user_profile', [
            'data' => $data,
            'dataPresence' => $dataPresence,
            'dataSubmission' => $dataSubmission,
            'totalPoint' => $totalPoint,
            'totalPresence' => $totalPresence,
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
