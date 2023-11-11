<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.app.news');
    }

    public function create()
    {
        return view('pages.app.news_create');
    }

    public function show()
    {
        return view('pages.app.news_detail');
    }
}
