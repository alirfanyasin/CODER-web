<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Division;
use App\Models\Admin\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    }


    public function division($id)
    {
        // Menggunakan with() untuk memuat relasi division
        $userDivision = Auth::user()->division; // name division
        $allData = Module::with('division')->where('division_id', $id)->get();

        // Mengambil divisi dengan ID yang sesuai
        $division = Division::find($id);

        // Jika divisi tidak ditemukan, Anda dapat menangani kasus ini sesuai kebutuhan
        if (!$division) {
            abort(404, 'Divisi tidak ditemukan');
        }

        // Mengelompokkan data berdasarkan division_id
        $groupedDataDivision = $allData->groupBy('division_id');

        // Mengelompokkan data berdasarkan meeting
        $groupedData = $allData->groupBy('meeting');

        return view('pages.app.elearning_module', [
            'allData' => $allData,
            'groupedData' => $groupedData,
            'groupedDataDivision' => $groupedDataDivision,
            'division' => $division, // Mengirimkan data divisi ke view
            'allDivision' => Division::all()
        ]);
    }
}
