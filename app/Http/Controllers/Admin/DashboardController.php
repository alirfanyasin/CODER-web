<?php

namespace App\Http\Controllers\Admin;

use App\Charts\DivisionActivity;
use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery;
use App\Models\Admin\Meet;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(DivisionActivity $chart)
    {
        $countGallery = Gallery::all();
        $countUser = User::all();
        $countNews = News::all();
        $meetingSchedule = Meet::all();


        return view('pages.app.dashboard', [
            'chart' => $chart->build(),
            'gallery' => $countGallery,
            'users' => $countUser,
            'news' => $countNews,
            'meetingSchedule' => $meetingSchedule
        ]);
    }
}
