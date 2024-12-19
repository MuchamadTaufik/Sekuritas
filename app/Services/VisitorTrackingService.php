<?php

namespace App\Services;

use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VisitorTrackingService
{
    public function trackVisitor(Request $request)
    {
        $sessionId = $request->session()->getId();
        $ipAddress = $request->ip();
        $currentTime = Carbon::now();

        try {
            // Cek kunjungan terakhir dari IP dan session yang sama
            $lastVisit = Visitor::where('ip_address', $ipAddress)
                ->where('session_id', $sessionId)
                ->latest('visited_at')
                ->first();

            // Cek apakah ada kunjungan dalam 5 menit terakhir
            if ($lastVisit && Carbon::parse($lastVisit->visited_at)->diffInMinutes($currentTime) < 5) {
                return null;
            }

            // Tentukan apakah ini pengunjung unik
            $isUnique = $this->determineIfUnique($ipAddress, $currentTime);

            // Catat kunjungan baru
            return Visitor::create([
                'ip_address' => $ipAddress,
                'user_agent' => $request->userAgent(),
                'session_id' => $sessionId,
                'page_url' => $request->fullUrl(),
                'referrer' => $request->header('referer'),
                'is_unique' => $isUnique,
                'visited_at' => $currentTime,
            ]);

        } catch (\Exception $e) {
            return null;
        }
    }

    private function determineIfUnique($ipAddress, $currentTime)
    {
        // Cek apakah IP ini sudah berkunjung dalam 24 jam terakhir
        return !Visitor::where('ip_address', $ipAddress)
            ->where('visited_at', '>=', $currentTime->copy()->subHours(24))
            ->exists();
    }

    public function getStatistics($period = 'daily', $startDate = null, $endDate = null)
    {
        $startDate = $startDate ?? Carbon::now()->startOfMonth();
        $endDate = $endDate ?? Carbon::now();

        $query = Visitor::unique()
            ->timePeriod($startDate, $endDate);

        return $this->aggregateData($query, $period);
    }

    private function aggregateData($query, $period)
    {
        switch ($period) {
            case 'daily':
                return $this->getDailyStats($query);
            case 'weekly':
                return $this->getWeeklyStats($query);
            case 'monthly':
                return $this->getMonthlyStats($query);
            case 'yearly':
                return $this->getYearlyStats($query);
            default:
                return $this->getDailyStats($query);
        }
    }

    private function getDailyStats($query)
    {
        return $query->selectRaw('
            DATE(visited_at) as date,
            COUNT(*) as total_visitors,
            COUNT(CASE WHEN is_unique = 1 THEN 1 END) as unique_visitors
        ')
        ->groupBy('date')
        ->get();
    }

    private function getWeeklyStats($query)
    {
        return $query->selectRaw('
            YEARWEEK(visited_at) as week,
            MIN(visited_at) as week_start,
            COUNT(*) as total_visitors,
            COUNT(CASE WHEN is_unique = 1 THEN 1 END) as unique_visitors
        ')
        ->groupBy('week')
        ->get()
        ->map(function ($item) {
            // Format week untuk tampilan yang lebih baik
            $weekStart = Carbon::parse($item->week_start);
            $item->date = 'Week ' . $weekStart->week . ', ' . $weekStart->format('Y');
            return $item;
        });
    }

    private function getMonthlyStats($query)
    {
        return $query->selectRaw('
            DATE_FORMAT(visited_at, "%Y-%m") as month,
            MIN(visited_at) as month_start,
            COUNT(*) as total_visitors,
            COUNT(CASE WHEN is_unique = 1 THEN 1 END) as unique_visitors
        ')
        ->groupBy('month')
        ->get()
        ->map(function ($item) {
            // Format bulan untuk tampilan yang lebih baik
            $monthStart = Carbon::parse($item->month_start);
            $item->date = $monthStart->format('M Y');
            return $item;
        });
    }

    private function getYearlyStats($query)
    {
        return $query->selectRaw('
            YEAR(visited_at) as year,
            COUNT(*) as total_visitors,
            COUNT(CASE WHEN is_unique = 1 THEN 1 END) as unique_visitors
        ')
        ->groupBy('year')
        ->get()
        ->map(function ($item) {
            $item->date = (string) $item->year;
            return $item;
        });
    }
}