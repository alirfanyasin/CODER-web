<?php

namespace App\Http\Controllers;

use App\Models\Admin\Division;
use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('pages.guest.landing-page', [
            'division' => Division::all()
        ]);
    }

    public function division_member($id)
    {
        return view('pages.guest.division_member', [
            'data' => User::where('division_id', $id)->get(),
            'division' => Division::findOrFail($id)
        ]);
    }
}
