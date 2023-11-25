<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use App\Models\Admin\Division;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // // Menggunakan with() untuk memuat relasi division
        $allData = Presence::with('division')->where('division_id', $id)->get();

        // Mengambil divisi dengan ID yang sesuai
        $division = Division::find($id);

        // Jika divisi tidak ditemukan, Anda dapat menangani kasus ini sesuai kebutuhan
        if (!$division) {
            abort(404, 'Divisi tidak ditemukan');
        }

        // Mengelompokkan data berdasarkan division_id
        $groupedDataDivision = $allData->groupBy('division_id');


        return view('pages.app.presence', [
            'allData' => $allData,
            'groupedDataDivision' => $groupedDataDivision,
            'division' => $division,
            'allDivision' => Division::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.app.presence_create', [
            'data_division' => Division::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'division_id' => 'required',
            'meeting' => 'required',
            'date' => 'required'
        ]);
        $validate['status'] = 'Active';
        Presence::create($validate);
        $divisionUser = Auth::user()->division_id;
        if (Auth::user()->hasPermissionTo('admin-division')) {
            return redirect()->route('elearning.task', $divisionUser)->with('success', 'Created presence successfully');
        } else {
            return redirect()->route('admin.presence', 1)->with('success', 'Created presence successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('pages.app.presence_show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.app.presence_edit', [
            'data' => Presence::findOrFail($id),
            'data_division' => Division::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'division_id' => 'required',
            'meeting' => 'required',
            'date' => 'required'
        ]);
        $validate['status'] = 'Active';
        $data = Presence::findOrFail($id);
        $data->update($validate);
        $divisionUser = Auth::user()->division_id;
        if (Auth::user()->hasPermissionTo('admin-division')) {
            return redirect()->route('elearning.task', $divisionUser)->with('success', 'Updated presence successfully');
        } else {
            return redirect()->route('admin.presence', 1)->with('success', 'Updated presence successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
