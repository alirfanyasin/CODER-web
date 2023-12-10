<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.guest.landing_news');
        // return view('pages.app.news', [
        //     'data' => News::all()
        // ]);
    }
    public function show(string $id)
    {
        $data = News::find($id);
        return view('pages.app.news_show', [
            'data' => $data
        ]);
    }
}
