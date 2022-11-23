<?php

namespace App\Http\Controllers;

use App\Models\{Desa, User, Opd, Tahun, Agama, Pekerjaan, Pkematian, Hiv};

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

    public function bkesehatan()
    {
        $data = Pkematian::all();
        $hiv = Hiv::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Kesehatan';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-kes', compact('title', 'subtitle', 'data', 'hiv'));

    }

    public function bpendidikan()
    {
        $data = Pkematian::all();
        $title = 'Data Terpilah Bidang Pendidikan';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-pend', compact('title', 'subtitle', 'data'));
    }

    public function bsda()
    {
        $data = Pkematian::all();
        $title = 'Data Terpilah Bidang Sumber Daya Alam Dan Lingkungan';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-sda', compact('title', 'subtitle', 'data'));
    }

    public function bekonomi()
    {
        $data = Pkematian::all();
        $title = 'Data Terpilah Bidang Ekonomi Dan Ketenaga Kerjaan';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-ekonomi', compact('title', 'subtitle', 'data'));
    }

    public function bpolitik()
    {
        $data = Pkematian::all();
        $title = 'Data Terpilah Bidang Politik Dan Pengambilan Keputusan';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-politik', compact('title', 'subtitle', 'data'));
    }

    public function bhukum()
    {
        $data = Pkematian::all();
        $title = 'Data Terpilah Bidang Hukum Dan Sosial Budaya';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-hukum', compact('title', 'subtitle', 'data'));
    }
}
