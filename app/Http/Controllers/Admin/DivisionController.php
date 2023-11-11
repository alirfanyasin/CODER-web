<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        return view('pages.app.division');
    }
    public function create()
    {
        return view('pages.app.division_create');
    }
}
