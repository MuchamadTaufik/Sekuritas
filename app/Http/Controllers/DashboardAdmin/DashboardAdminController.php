<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\Rups;
use App\Models\User;
use App\Models\Dokumen;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Charts\StatistikUser;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Services\VisitorTrackingService;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    protected $statistikChart;
    protected $visitorService;
    
    public function __construct(StatistikUser $statistikChart, VisitorTrackingService $visitorService)
    {
        $this->statistikChart = $statistikChart;
        $this->visitorService = $visitorService;

        // Middleware auth memastikan hanya pengguna yang sudah login yang dapat mengakses
        $this->middleware('auth');

        // Cek apakah pengguna yang terautentikasi adalah admin
        $this->middleware(function ($request, $next) {
            $user = Auth::user();

            // Jika pengguna bukan admin, hrd, atau superadmin, kembalikan ke halaman home
            if (!in_array($user->role, ['admin', 'hrd', 'superadmin'])) {
                return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini');
            }

            // Jika admin, lanjutkan ke halaman yang diminta
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $kegiatan = Kegiatan::count();
        $rups = Rups::count();
        $dokumen = Dokumen::count();
        $user = User::count();

        //Statistik
        $period = $request->get('period', 'daily');
        $startDate = $request->get('start_date', Carbon::now()->startOfMonth());
        $endDate = $request->get('end_date', Carbon::now());

        // Langsung build chart dengan parameter yang ada
        $chart = $this->statistikChart->build($period, $startDate, $endDate);

        return view('dashboard-admin.index',[
            'totalKegiatan' => $kegiatan,
            'totalRups' => $rups,
            'totalDokumen' => $dokumen,
            'totalUser' => $user,
            'chart' => $chart
        ]);
    }
}
