<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.app.gallery');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.app.gallery_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the file uploads
        $request->validate([
            'img.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust based on your requirements
        ]);
        // Check if files were uploaded
        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $file) {
                $rdmStr = Str::random(5);
                $fileName = $rdmStr . '_' . $file->getClientOriginalName();
                $file->storeAs('public/gallery', $fileName);

                // Create a new Gallery model instance
                Gallery::create([
                    'img' => $fileName
                ]);
            }

            // Return a success response
            return response()->json(['message' => 'Files uploaded successfully'], 200);
        }

        // Handle the case when no files are uploaded
        return response()->json(['error' => 'No files uploaded'], 400);
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
        //
    }
}
