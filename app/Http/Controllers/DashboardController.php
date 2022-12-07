<?php

namespace App\Http\Controllers;

use App\Models\{Desa, Opd, Tahun, Agama, Pekerjaan, Pkematian, Hiv, Ptssekolah, Kmtbayi};

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
        return view('dashboard.dashboard-index', compact('active', 'desa', 'opd', 'pekerjaan', 'tahun', 'agama', 'pageTitle'));
    }

    public function landing()
    {
        $data = Pkematian::all();
        // foreach ($data as $item) {
        //     $item = $item->
        // };
        // dd($data);

        // highchart
        // $data = Pkematian::groupBy('desa_id')->selectRaw(
        //     'desas.nama_desa,
        //     sum(jum_partuslama) as partusLama,
        //     sum(jum_infeksi) as infeksi,
        //     sum(jum_hirpetensi) as hirpetensi,
        //     sum(jum_pendarahan) as pendarahan,
        //     sum(jum_penyebablain) as penyelain'
        // )->get()

        // BARCHART_KEMATIAN_IBU;
        $dataDesa = Pkematian::groupBy('desa_id')
            ->select('desa_id')
            ->selectRaw(
             'sum(jum_partuslama) as partusLama,
            sum(jum_infeksi) as infeksi,
            sum(jum_hirpetensi) as hirpetensi,
            sum(jum_pendarahan) as pendarahan,
            sum(jum_penyebablain) as penyelain',
            )
            ->get();

        $desa = [];
        $jum = [];
        foreach ($dataDesa as $item) {
            $desa[] = $item->desa->nama_desa;
            $jum[] = $item->partusLama + $item->infeksi + $item->hirpetensi + $item->pendarahan + $item->penyelain;
        }
        // dd($jum);
        // LOGARITM_KEMATIAN_IBU
        $dataKematian = Pkematian::groupBy('tahun_id')
            ->selectRaw(
                'sum(jum_partuslama) as partusLama,
            sum(jum_infeksi) as infeksi,
            sum(jum_hirpetensi) as hirpetensi,
            sum(jum_pendarahan) as pendarahan,
            sum(jum_penyebablain) as penyelain',
            )
            ->get();
        // dd($dataKematian);
        $jumKematian = [];

        foreach ($dataKematian as $itemk) {
            $jumKematian[] = $itemk->partusLama + $itemk->infeksi + $itemk->hirpetensi + $itemk->pendarahan + $itemk->penyelain;
        }

        // piechartKEMATIAN_IBU
        $dataKmtIbu = Pkematian::selectRaw(
            'sum(jum_partuslama) as partusLama,
            sum(jum_infeksi) as infeksi,
            sum(jum_hirpetensi) as hirpetensi,
            sum(jum_pendarahan) as pendarahan,
            sum(jum_penyebablain) as penyelain',
            )
            ->get();
        foreach ($dataKmtIbu as $piechartKmtIbu) {
            
        }
        // KEMATIAN_BAYI
        // BARCHART
        $dataDesaKmtbayi = Kmtbayi::groupBy('desa_id')
            ->select('desa_id')
            ->selectRaw(
                'sum(l) as jumlahPria,
            sum(p) as jumlahWanita',
            )
            ->get();
        // dd($dataDesaKmtbayi);
        $desaKmtbayi = [];
        $jumKmtbayi = [];
        foreach ($dataDesaKmtbayi as $item) {
            $desaKmtbayi[] = $item->desa->nama_desa;
            $jumKmtbayi[] = $item->jumlahPria + $item->jumlahWanita;
        }
        // dd($jumKmtbayi);

        // PIECHART BAYI
        $dataKmtBayi = Kmtbayi::selectRaw(
            'sum(l) as co,
            sum(p) as ce'
            )
            ->get();
        foreach ($dataKmtBayi as $piechartKmtBayi) {
            
        }

         // LOGARITM_KMT_BAYI
         $logdataKmtbayi = Kmtbayi::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as co,
                sum(p) as ce'
            )
            ->get();
        // dd($dataKematian);
        $logjumKmtbayi = [];

        foreach ($logdataKmtbayi as $itemk) {
            $logjumKmtbayi[] = $itemk->co + $itemk->ce;
        }

        // HIV
        // Barchart
        $dataDesaHiv = Hiv::groupBy('desa_id')
            ->select('desa_id')
            ->selectRaw(
                'sum(l) as jumlahPria,
            sum(p) as jumlahWanita',
            )
            ->get();

        $desaHiv = [];
        $jumHiv = [];
        foreach ($dataDesaHiv as $item) {
            $desaHiv[] = $item->desa->nama_desa;
            $jumHiv[] = $item->jumlahPria + $item->jumlahWanita;
        }
        // dd($jumHiv);

        // Piechart
        $dataHiv = Hiv::selectRaw(
            'sum(l) as co,
            sum(p) as ce'
            )
            ->get();
        foreach ($dataHiv as $piechartHiv) {
            
        }

        // Logaritm
        $logdataHiv = Hiv::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as co,
                sum(p) as ce'
            )
            ->get();
        // dd($dataKematian);
        $logjumHiv = [];

        foreach ($logdataHiv as $itemk) {
            $logjumHiv[] = $itemk->co + $itemk->ce;
        }
        
        return view('landing.welcome', compact(
            'desa', 
            'jum', 
            'piechartKmtIbu',
            'piechartKmtBayi',
            'piechartHiv',
            'jumKematian', 
            'desaKmtbayi',
            'jumKmtbayi',
            'desaHiv',
            'jumHiv',
           'logjumKmtbayi',
           'logjumHiv'
        ));
    }

    public function ipgPenduduk()
    {
        $title = 'Data Persentase Penduduk';
        $subtitle = 'Data dajdajd daidhadnada dadiahdiad adihadahr ahairhairhriara  arahriahrai arairiayriy';
        return view('landing.landing-ipg-penduduk', compact('title', 'subtitle'));
    }

    public function ipgJenkel()
    {
        $title = 'Data Jenis Kelamin';
        $subtitle = 'Data dajdajd daidhadnada dadiahdiad adihadahr ahairhairhriara  arahriahrai arairiayriy';
        return view('landing.landing-ipg-jenkel', compact('title', 'subtitle'));
    }

    public function ipgUmur()
    {
        $title = 'Data Kelompok Umur';
        $subtitle = 'Data dajdajd daidhadnada dadiahdiad adihadahr ahairhairhriara  arahriahrai arairiayriy';
        return view('landing.landing-ipg-umur', compact('title', 'subtitle'));
    }

    public function ipgPendidikan()
    {
        $data = Ptssekolah::all();
        $ptsSekolah = Ptssekolah::orderBy('created_at', 'ASC')->get();
        $title = 'Data Pendidikan Terakhir';
        $subtitle = 'Data dajdajd daidhadnada dadiahdiad adihadahr ahairhairhriara  arahriahrai arairiayriy';
        return view('landing.landing-ipg-pendidikan', compact('title', 'subtitle', 'data', 'ptsSekolah'));
    }

    public function bkesehatan()
    {
        $data = Pkematian::all();
        $hiv = Hiv::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Kesehatan';
        $subtitle = 'Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-kes', compact('title', 'subtitle', 'data', 'hiv'));
    }

    public function bpendidikan()
    {
        $data = Ptssekolah::all();
        $ptsSekolah = Ptssekolah::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Pendidikan';
        $subtitle = 'Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-pend', compact('title', 'subtitle', 'data', 'ptsSekolah'));
    }

    public function bsda()
    {
        $data = Pkematian::all();
        $hiv = Hiv::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Sumber Daya Alam Dan Lingkungan';
        $subtitle = 'Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-sda', compact('title', 'subtitle', 'data', 'hiv'));
    }

    public function bekonomi()
    {
        $data = Pkematian::all();
        $hiv = Hiv::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Ekonomi Dan Ketenaga Kerjaan';
        $subtitle = 'Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-ekonomi', compact('title', 'subtitle', 'data', 'hiv'));
    }

    public function bpolitik()
    {
        $data = Pkematian::all();
        $hiv = Hiv::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Politik Dan Pengambilan Keputusan';
        $subtitle = 'Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-politik', compact('title', 'subtitle', 'data', 'hiv'));
    }

    public function bhukum()
    {
        $data = Pkematian::all();
        $hiv = Hiv::orderBy('created_at', 'ASC')->get();
        $title = 'Data Terpilah Bidang Hukum Dan Sosial Budaya';
        $subtitle = 'Data Kematian merupakan data dari jumlah kematian ibu, ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-hukum', compact('title', 'subtitle', 'data'));
    }
}
