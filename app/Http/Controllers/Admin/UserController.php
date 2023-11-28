<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Presence;
use App\Models\Submission;
use App\Models\User;
use App\Models\UserPresence;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.app.users', [
            'data' => User::all(),
            'permission_name' => Permission::all()
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





    public function givePermission($id)
    {
        $data = User::findOrFail($id);
        $data->givePermissionTo('admin-division');
        return redirect()->route('admin.users')->with('success', 'Give permission as admin division to ' . $data->name);
    }

    public function revokePermission($id)
    {
        $data = User::findOrFail($id);
        $data->revokePermissionTo('admin-division');
        return redirect()->route('admin.users')->with('success', 'Give permission as admin division to ' . $data->name);
    }
}
