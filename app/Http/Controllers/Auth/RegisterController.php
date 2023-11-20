<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin\Division;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register', [
            'data_division' => Division::all()
        ]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'division' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8'
        ], [
            'name.required' => 'Name wajib diisi',
            'division.required' => 'Division wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter'
        ]);

        $user = User::create($validatedData);
        $user->assignRole('user');
        return redirect()->route('login')->with('success', 'Registered successfully');
    }
}
