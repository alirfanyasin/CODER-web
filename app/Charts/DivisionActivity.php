<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class DivisionActivity
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        // Ambil data total pertemuan setiap divisi dari database
        $divisionMeetings = DB::table('meets')
            ->select('division_id', DB::raw('COUNT(*) as total_meetings'))
            ->groupBy('division_id')
            ->pluck('total_meetings', 'division_id');

        // Ambil data total presensi setiap divisi dari database
        $divisionPresences = DB::table('presences')
            ->select('division_id', DB::raw('COUNT(*) as total_presences'))
            ->groupBy('division_id')
            ->pluck('total_presences', 'division_id');



        // Nama-nama divisi (misalnya, Anda mungkin memiliki model Divisi (Division))
        $divisions = ['Web Dev', 'UI/UX', 'Mobile Dev', 'Comp. Programming', 'Data Engineering', 'AI'];



        // Inisialisasi larapexChart
        return $this->chart->areaChart()
            ->addData('Division Presence', array_values($divisionPresences->toArray()))
            ->addData('Division Meeting', array_values($divisionMeetings->toArray()))
            ->setHeight(400)
            ->setColors(['#01012D', '#FFFFFF'])
            ->setXAxis($divisions)
            ->setFontColor('#FFFFFF');
    }
}
