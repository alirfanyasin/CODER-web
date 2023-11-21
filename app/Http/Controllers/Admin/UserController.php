<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.app.users', [
            'data' => User::all()
        ]);
    }

    public function profile()
    {
        return view('pages.app.user_profile');
    }
}
