<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Division;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.app.elearning_task');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.app.elearning_task_create', [
            'data_division' => Division::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'task_name' => 'required',
            'description' => 'required',
            'file' => 'nullable|file|mimes:pdf|max:2048',
            'division_id' => 'required',
            'deadline' => 'required',
        ]);
        $validateData['user_id'] = Auth::user()->id;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $nameFile = Str::random(5) . "_" . $file->getClientOriginalName();
            $file->storeAs('public/task', $nameFile);
            $validateData['file'] = $nameFile;
        }

        // dd($validateData);

        $divisionUser = Auth::user()->division_id;

        Task::create($validateData);
        if (Auth::user()->hasPermissionTo('admin-division')) {
            return redirect()->route('elearning.task', $divisionUser)->with('success', 'Created task successfully');
        } else {
            return redirect()->route('admin.elearning.task.division', 1)->with('success', 'Created task successfully');
        }
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
        return view('pages.app.elearning_task_edit', [
            'data' => Task::findOrFail($id),
            'data_division' => Division::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Task::findOrFail($id);
        $validateData = $request->validate([
            'task_name' => 'required',
            'description' => 'required',
            'file' => 'nullable|file|mimes:pdf|max:2048',
            'division_id' => 'required',
            'deadline' => 'required',
        ]);
        $validateData['user_id'] = Auth::user()->id;

        // Hapus file lama jika ada file baru diunggah
        if ($request->hasFile('file')) {
            $oldFile = $data->file;

            if ($oldFile) {
                // Hapus file lama dari penyimpanan
                Storage::delete('public/task/' . $oldFile);
            }

            // Upload file baru
            $file = $request->file('file');
            $nameFile = Str::random(5) . "_" . $file->getClientOriginalName();
            $file->storeAs('public/task', $nameFile);
            $validateData['file'] = $nameFile;
        }
        $divisionUser = Auth::user()->division_id;
        $data->update($validateData);
        if (Auth::user()->hasPermissionTo('admin-division')) {
            return redirect()->route('elearning.task', $divisionUser)->with('success', 'Updated task successfully');
        } else {
            return redirect()->route('admin.elearning.task.division', 1)->with('success', 'Updated task successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Task::findOrFail($id);
        if (!$data) {
            return redirect()->back()->with('error', 'File not found');
        }
        Storage::delete('public/task/' . $data->file);
        $data->delete();
        $divisionUser = Auth::user()->division_id;
        if (Auth::user()->hasPermissionTo('admin-division')) {
            return redirect()->route('elearning.task', $divisionUser)->with('success', 'Deleted task successfully');
        } else {
            return redirect()->route('admin.elearning.task.division', 1)->with('success', 'Deleted task successfully');
        }
    }


    public function division($id)
    {
        // Menggunakan with() untuk memuat relasi division
        $allData = Task::with('division')->where('division_id', $id)->orderBy('id', 'desc')->get();

        // Mengambil divisi dengan ID yang sesuai
        $division = Division::find($id);

        // Jika divisi tidak ditemukan, Anda dapat menangani kasus ini sesuai kebutuhan
        if (!$division) {
            abort(404, 'Divisi tidak ditemukan');
        }

        // Mengelompokkan data berdasarkan division_id
        $groupedDataDivision = $allData->groupBy('division_id');

        // Mengelompokkan data berdasarkan meeting
        // $groupedData = $allData->groupBy('meeting');

        return view('pages.app.elearning_task', [
            'allData' => $allData,
            // 'groupedData' => $groupedData,
            'groupedDataDivision' => $groupedDataDivision,
            'division' => $division, // Mengirimkan data divisi ke view
            'allDivision' => Division::all()
        ]);
    }
}
