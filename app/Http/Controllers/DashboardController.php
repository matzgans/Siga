<?php

namespace App\Http\Controllers;

use App\Models\{Desa, User, Opd, Tahun, Agama, Pekerjaan, Pkematian, Hiv, Ptssekolah};

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

    public function ipgPenduduk()
    {
        $title = 'Data Persentase Penduduk';
        $subtitle = "Data dajdajd daidhadnada dadiahdiad adihadahr ahairhairhriara  arahriahrai arairiayriy";
        return view('landing.landing-ipg-penduduk', compact('title', 'subtitle'));
    }

    public function ipgJenkel()
    {
        $title = 'Data Jenis Kelamin';
        $subtitle = "Data dajdajd daidhadnada dadiahdiad adihadahr ahairhairhriara  arahriahrai arairiayriy";
        return view('landing.landing-ipg-jenkel', compact('title', 'subtitle'));
    }

    public function ipgUmur()
    {
        $title = 'Data Kelompok Umur';
        $subtitle = "Data dajdajd daidhadnada dadiahdiad adihadahr ahairhairhriara  arahriahrai arairiayriy";
        return view('landing.landing-ipg-umur', compact('title', 'subtitle'));
    }

    public function ipgPendidikan()
    {
        $data = Ptssekolah::all();
        $ptsSekolah = Ptssekolah::orderBy('created_at', 'ASC')->get();
        $title = 'Data Pendidikan Terakhir';
        $subtitle = "Data dajdajd daidhadnada dadiahdiad adihadahr ahairhairhriara  arahriahrai arairiayriy";
        return view('landing.landing-ipg-pendidikan', compact('title', 'subtitle', 'data','ptsSekolah'));
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
        $data = Ptssekolah::all();
        $ptsSekolah = Ptssekolah::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Pendidikan';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-pend', compact('title', 'subtitle', 'data', 'ptsSekolah'));
    }

    public function bsda()
    {
        $data = Pkematian::all();
        $hiv = Hiv::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Sumber Daya Alam Dan Lingkungan';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-sda', compact('title', 'subtitle', 'data', 'hiv'));
    }

    public function bekonomi()
    {
        $data = Pkematian::all();
        $hiv = Hiv::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Ekonomi Dan Ketenaga Kerjaan';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-ekonomi', compact('title', 'subtitle', 'data', 'hiv'));
    }

    public function bpolitik()
    {
        $data = Pkematian::all();
        $hiv = Hiv::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Politik Dan Pengambilan Keputusan';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-politik', compact('title', 'subtitle', 'data', 'hiv'));
    }

    public function bhukum()
    {
        $data = Pkematian::all();
        $hiv = Hiv::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Hukum Dan Sosial Budaya';
        $subtitle = "Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate";
        return view('landing.terpilah-hukum', compact('title', 'subtitle', 'data'));
    }
}
