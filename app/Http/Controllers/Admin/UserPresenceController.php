<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Presence;
use App\Models\User;
use App\Models\UserPresence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'status.*' => 'required|in:Hadir,Izin,Alfa',
        ]);

        $presence_id = $request->presence_id;

        foreach ($validate['status'] as $userId => $status) {
            $user = User::find($userId);



            if ($user) {
                if ($status == 'Hadir') {
                    UserPresence::updateOrCreate(
                        ['user_id' => $user->id, 'presence_id' => $presence_id, 'point' => 2],
                        ['status' => $status]
                    );
                } else {
                    UserPresence::updateOrCreate(
                        ['user_id' => $user->id, 'presence_id' => $presence_id, 'point' => 0],
                        ['status' => $status]
                    );
                }
            }
        }

        $dataPresence = Presence::findOrFail($presence_id);
        $dataPresence->update(['status' => 'Done']);
        $divisionUser = Auth::user()->division_id;
        if (Auth::user()->hasPermissionTo('admin-division')) {
            return redirect()->route('elearning.task', $divisionUser)->with('success', 'Submitted presence successfully');
        } else {
            return redirect()->route('admin.presence', $request->division_id)->with('success', 'Submitted presence successfully');
        }
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
