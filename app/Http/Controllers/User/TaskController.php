<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Division;
use App\Models\Submission;
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $subm_id, $divi_id)
    {
        $validate = $request->validate([
            'submission' => 'required|url'
        ]);
        $validate['user_id'] = Auth::user()->id;
        $validate['task_id'] = $request->task_id;

        $data = Submission::findOrFail($subm_id);
        $data->update($validate);
        return redirect('/e-learning/task/division-' . $divi_id)->with('success', 'Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }


    public function division($id)
    {
        // Mendapatkan id divisi pengguna saat ini
        $userDivisionId = Auth::user()->division_id;

        // Memastikan bahwa pengguna hanya dapat mengakses divisi yang sesuai dengan id mereka
        if ($userDivisionId != $id) {
            // Tambahkan logika jika pengguna mencoba mengakses divisi yang tidak sesuai
            abort(403, 'Unauthorized action.');
        }
        // Menggunakan with() untuk memuat relasi division
        $allData = Task::with('division')->where('division_id', $id)->orderBy('id', 'desc')->get();

        // Mengambil divisi dengan ID yang sesuai
        $division = Division::find($id);

        // Jika divisi tidak ditemukan, Anda dapat menangani kasus ini sesuai kebutuhan
        if (!$division) {
            abort(404, 'Divisi tidak ditemukan');
        }


        return view('pages.app.elearning_task_user', [
            'allData' => $allData,
            'division' => $division,
            'submission_data' => Submission::all()
        ]);
    }

    /**
     * Create Submission.
     */
    public function submission(Request $request, $id)
    {
        $validateData = $request->validate([
            'submission' => 'required|url',
        ]);

        $validateData['user_id'] = Auth::user()->id;
        $validateData['task_id'] = $request->task_id;

        Submission::create($validateData);
        return redirect('/e-learning/task/division-' . $id)->with('success', 'Task Submitted Successfully');
    }
}
