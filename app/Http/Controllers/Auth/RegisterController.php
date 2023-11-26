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
            'nim' => 'required',
            'field_of_study' => 'required',
            'division_id' => 'required|integer',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8'
        ], [
            'name.required' => 'Nama Lengkap wajib diisi',
            'nim.required' => 'NIM wajib diisi',
            'field_of_study.required' => 'Jurusan wajib diisi',
            'division_id.required' => 'Division wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter'
        ]);

        $validatedData['division_id'] = $request->division_id;

        // dd($validatedData);
        $user = User::create($validatedData);
        $user->assignRole('user');
        return redirect()->route('login')->with('success', 'Registered successfully');
    }
}
