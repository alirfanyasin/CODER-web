<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Division;
use App\Models\User;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.app.division', [
            'data' => Division::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.app.division_create');
    }

    /**
     * Show the form for member a new resource.
     */
    public function member($id)
    {
        return view('pages.app.division_member', [
            'data' => User::where('division_id', $id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required'
        ]);

        Division::create($validate);
        return redirect()->route('admin.division')->with('success', 'Create division successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Division $division, $id)
    {
        return view('pages.app.division_edit', [
            'data' => Division::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Division $division, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required'
        ]);

        Division::where('id', $id)->update($validate);
        return redirect()->route('admin.division')->with('success', 'Updated data successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Division $division, $id)
    {
        Division::destroy($id);
        return redirect()->route('admin.division')->with('success', 'Deleted data successfuly');
    }
}
