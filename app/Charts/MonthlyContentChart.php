<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyContentChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        return $this->chart->areaChart()
            ->addData('Physical sales', [40, 93, 35, 42, 18, 82, 45, 78, 34, 89])
            ->addData('Digital sales', [70, 29, 77, 28, 55, 45, 56, 67, 90, 46])
            ->setHeight(400)
            ->setColors(['#01012D', '#FFFFFF'])
            ->setXAxis(['Jan', 'Feb', 'March', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'])
            ->setFontColor('#FFFFFF');;
    }
}
