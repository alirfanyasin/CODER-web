<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use App\Models\Admin\Division;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // // Menggunakan with() untuk memuat relasi division
        // $allData = Absence::with('division')->where('division_id', $id)->get();

        // // Mengambil divisi dengan ID yang sesuai
        // $division = Division::find($id);

        // // Jika divisi tidak ditemukan, Anda dapat menangani kasus ini sesuai kebutuhan
        // if (!$division) {
        //     abort(404, 'Divisi tidak ditemukan');
        // }

        // // Mengelompokkan data berdasarkan division_id
        // $groupedDataDivision = $allData->groupBy('division_id');

        // // Mengelompokkan data berdasarkan meeting
        // $groupedData = $allData->groupBy('meeting');

        // return view('pages.app.absence', [
        //     'allData' => $allData,
        //     'groupedData' => $groupedData,
        //     'groupedDataDivision' => $groupedDataDivision,
        //     'division' => $division,
        //     'allDivision' => Division::all()
        // ]);

        return view('pages.app.presence');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.app.presence_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
