<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('pages.app.user_profile', [
            'data' => $data,
            'dataPresence' => $dataPresence,
            'dataSubmission' => $dataSubmission
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
