<?php

namespace App\Http\Controllers;

use App\Models\{Desa, User, Opd, Tahun, Agama, Pekerjaan, Pkematian};
use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;

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
        return view('landing.welcome');
    }

    public function ipg()
    {
        $title = 'Data Terpilah Menurut Jenis Kelamin';
        $subtitle = "Data dajdajd daidhadnada dadiahdiad adihadahr ahairhairhriara  arahriahrai arairiayriy";
        return view('landing.landing-ipg', compact('title', 'subtitle'));
    }

    public function dataterpilah()
    {
        $data = Pkematian::all();
        $title = 'Data Kematian Ibu Hamil';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.landing-dataterpilah', compact('title', 'subtitle', 'data'));

    }
}
