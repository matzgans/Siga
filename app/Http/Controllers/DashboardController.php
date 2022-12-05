<?php

namespace App\Http\Controllers;

use App\Models\{Desa, Opd, Tahun, Agama, Pekerjaan, Pkematian, Hiv, Ptssekolah};

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
        // $data = Pkematian::all()
        // foreach ($data as $item) {
        //     $item = $item->
        // };
        // dd($data);
        // highchart
        $data = Pkematian::all();
        $dataKematian = Pkematian::groupBy('tahun_id')->selectRaw(
            'sum(jum_partuslama) as partusLama,
            sum(jum_infeksi) as infeksi,
            sum(jum_hirpetensi) as hirpetensi,
            sum(jum_pendarahan) as pendarahan,
            sum(jum_penyebablain) as penyelain'
            )->get();
        // dd($dataKematian);
        $desa = [];
        $jum = [];
        $jumKematian = [];
        
        foreach ($data as $item) {
            $desa []= $item->desa->nama_desa;
            $jum [] = $item->jum_partuslama + $item->jum_infeksi + $item->jum_hirpetensi + $item->jum_pendarahan
            + $item->jum_penyebablain;
            
        }
        foreach ($dataKematian as $itemk) {
            $jumKematian [] = $itemk->partusLama + $itemk->infeksi + $itemk->hirpetensi + $itemk->pendarahan
            + $itemk->penyelain;
        }

        // piechart
        $partus_lama = $data->sum('jum_partuslama');
        $infeksi = $data->sum('jum_infeksi');
        $hirpetensi = $data->sum('jum_hirpetensi');
        $pendarahan = $data->sum('jum_pendarahan');
        $penyelain = $data->sum('jum_penyebablain');

        // logaritmChart

        return view('landing.welcome', compact('desa', 'jum', 'partus_lama', 'infeksi', 'hirpetensi', 'pendarahan',
            'penyelain', 'jumKematian'));
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
