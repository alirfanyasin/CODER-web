<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Division;
use App\Models\Admin\Meet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeetController extends Controller
{
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.app.elearning_meet_create', [
            'data_division' => Division::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'division_id' => 'required',
            'topic' => 'required|string',
            'meeting' => 'required',
            'start_time' => 'required',
            'end_time' => 'nullable',
            'link' => 'required|url',
            'type' => 'nullable|string',
        ], [
            'topic.required' => 'Topic harus diisi',
            'meeting.required' => 'Pertemuan harus diisi',
            'start_time.required' => 'Start Time harus diisi',
            'link.url' => 'Link harus berupa url',
        ]);

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['division_id'] = $request->division_id;
        $validatedData['status'] = 'Active';
        Meet::create($validatedData);
        return redirect()->route('admin.elearning.meet.division', $request->division_id)->with('success', 'Meet created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Meet::find($id);
        return view('pages.app.elearning_meet_show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.app.elearning_meet_edit', [
            'data' => Meet::findOrFail($id),
            'data_division' => Division::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Meet::findOrFail($id);
        $validatedData = $request->validate([
            // 'division_id' => 'required',
            'topic' => 'required|string',
            'meeting' => 'required',
            'start_time' => 'required',
            'end_time' => 'nullable',
            'link' => 'required|url',
            'type' => 'nullable|string',
        ], [
            'topic.required' => 'Topic harus diisi',
            'meeting.required' => 'Pertemuan harus diisi',
            'start_time.required' => 'Start Time harus diisi',
            'link.url' => 'Link harus berupa url',
        ]);

        $validatedData['user_id'] = Auth::user()->id;
        $divisionUser = Auth::user()->division_id;
        $validatedData['division_id'] = $request->division_id;
        $validatedData['status'] = 'Done';
        $data->update($validatedData);

        return redirect()->route('admin.elearning.meet.division', $request->division_id)->with('success', 'Meet Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Meet::destroy($id);

        return redirect('/admin/e-learning/meet/division-1')->with('success', 'Deleted meet successfully');
    }


    public function division($id)
    {
        // Menggunakan with() untuk memuat relasi division
        $allData = Meet::with('division')->where('division_id', $id)->get();

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

        return view('pages.app.elearning_meet', [
            'allData' => $allData,
            'groupedData' => $groupedData,
            'groupedDataDivision' => $groupedDataDivision,
            'division' => $division, // Mengirimkan data divisi ke view
            'allDivision' => Division::all()
        ]);
    }
}
