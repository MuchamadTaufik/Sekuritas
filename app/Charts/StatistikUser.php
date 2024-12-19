<?php

// app/Charts/StatistikUser.php
namespace App\Charts;

use App\Services\VisitorTrackingService;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class StatistikUser
{
    protected $chart;
    protected $visitorService;

    public function __construct(
        LarapexChart $chart,
        VisitorTrackingService $visitorService
    ) {
        $this->chart = $chart;
        $this->visitorService = $visitorService;
    }

    public function build(string $period, $startDate = null, $endDate = null)
    {
        $stats = $this->visitorService->getStatistics($period, $startDate, $endDate);

        // Format data
        $labels = $stats->pluck('date')->toArray();
        $totalVisitors = $stats->pluck('total_visitors')->toArray();
        $uniqueVisitors = $stats->pluck('unique_visitors')->toArray();

        // Buat chart dengan data yang sudah disiapkan
        return $this->chart->lineChart()
            ->addData('Total Pengunjung', $totalVisitors)
            ->addData('Pengunjung Unik', $uniqueVisitors)
            ->setXAxis($labels);
    }
}