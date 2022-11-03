<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Desa, User, Opd, Tahun, Agama, Pekerjaan};

class DashboardController extends Controller
{
    public function index()
    {
        $active = 'home';
        $desa = Desa::count();
        $opd = Opd::count();
        $pekerjaan = Pekerjaan::count();
        $tahun = Tahun::count();
        $agama = Agama::count();
        $pageTitle = 'Dashboard';
        return view('dashboard.dashboard-index', compact('active', 'desa','opd','pekerjaan','tahun','agama', 'pageTitle'));
    }

    public function landing()
    {
        return view('welcome');
    }
}
