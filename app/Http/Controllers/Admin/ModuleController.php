<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Division;
use App\Models\Admin\Module;
use Illuminate\Http\Request;
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
        return view('pages.app.elearning_module_create', [
            'data_division' => Division::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lesson' => 'required|string',
            'meeting' => 'required',
            'division_id' => 'required',
            'type' => 'required|string',
            'link' => 'nullable|url',
            'file' => 'nullable|file|mimes:docx,doc,ppt,pptx,txt,pdf,xls,xlsx|max:5120',
        ], [
            'lesson.required' => 'Lesson Name wajib diisi',
            'lesson.string' => 'Lesson Name harus berupa string',
            'meeting.required' => 'Meeting wajib diisi',
            'type.required' => 'Type wajib diisi',
            'link.url' => 'Link harus berupa url',
            'file.mimes' => 'File harus berupa docx,doc,ppt,pptx,txt,pdf,xls,xlsx',
            'file.max' => 'File maksimal 5 MB'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = Str::random(5) . '_' . $file->getClientOriginalName();
            $file->storeAs('public/module/files', $fileName);
            $validatedData['file'] = $fileName;
        }

        Module::create($validatedData);

        return redirect()->route('admin.elearning.module.division', $request->division_id)->with('success', 'Module created successfully');
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
        $file = Module::findOrFail($id);
        if (!$file) {
            return redirect()->back()->with('error', 'File not found');
        }
        Storage::delete('public/module/files/' . $file->file);
        $file->delete();
        return redirect('/admin/e-learning/module/division-' . $file->division->id)->with('success', 'Deleted module successfully');
    }


    public function division($id)
    {
        // Menggunakan with() untuk memuat relasi division
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
