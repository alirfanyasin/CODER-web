<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.app.users');
    }

    public function profile()
    {
        return view('pages.app.user_profile');
    }
}
