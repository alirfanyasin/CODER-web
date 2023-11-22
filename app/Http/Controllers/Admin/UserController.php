<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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

    public function profile()
    {
        return view('pages.app.user_profile');
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
