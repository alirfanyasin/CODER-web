<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('pages.app.gallery');
    }

    public function create()
    {
        return view('pages.app.gallery_create');
    }
}
