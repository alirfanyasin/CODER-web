<?php

namespace App\Http\Controllers;

use App\Models\Admin\Gallery;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // return view('pages.guest.landing_gallery');
        return view('pages.guest.landing_gallery', [
            'data' => Gallery::all()
        ]);
    }
}
