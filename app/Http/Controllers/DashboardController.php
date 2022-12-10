<?php

namespace App\Http\Controllers;

use App\Models\{Desa, Opd, Tahun, Agama, Pekerjaan, Pkematian, Hiv, Ptssekolah, Kmtbayi, Partsekolah, Jumguru};

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
        )->get();
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
            sum(p) as ce',
        )->get();
        foreach ($dataKmtBayi as $piechartKmtBayi) {
        }

        // LOGARITM_KMT_BAYI
        $logdataKmtbayi = Kmtbayi::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as co,
                sum(p) as ce',
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
            sum(p) as ce',
        )->get();
        foreach ($dataHiv as $piechartHiv) {
        }

        // Logaritm
        $logdataHiv = Hiv::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as co,
                sum(p) as ce',
            )
            ->get();
        // dd($dataKematian);
        $logjumHiv = [];

        foreach ($logdataHiv as $itemk) {
            $logjumHiv[] = $itemk->co + $itemk->ce;
        }

        // BIDANG PENDIDIKAN
        // Barchart PartSekolah
        $dataDesaPartsekolah = Partsekolah::groupBy('desa_id')
            ->select('desa_id')
            ->selectRaw(
                'sum(l7) as l7,
            sum(p7) as p7,
            sum(l13) as l13,
            sum(p13) as p13,
            sum(l16) as l16,
            sum(p16) as p16,
            sum(l19) as l19,
            sum(p19) as p19',
            )
            ->get();

        $desaPartsekolah = [];
        $jumPartsekolah = [];
        foreach ($dataDesaPartsekolah as $item) {
            $desaPartsekolah[] = $item->desa->nama_desa;
            $jumPartsekolah[] = $item->l7 + $item->p7 + $item->l13 + $item->p13 + $item->l16 + $item->p16 + $item->l19 + $item->p19;
        }
        // dd($jumPartsekolah);

        // Piechart Partsekolah
        $dataPartsekolah = Partsekolah::selectRaw(
            'sum(l7) as l7,
            sum(p7) as p7,
            sum(l13) as l13,
            sum(p13) as p13,
            sum(l16) as l16,
            sum(p16) as p16,
            sum(l19) as l19,
            sum(p19) as p19',
        )->get();
        foreach ($dataPartsekolah as $piechartPartsekolah) {
        }
        // dd($piechartPartsekolah);
        // Logchart Partsekolah
        $logdataPartsekolah = Partsekolah::groupBy('tahun_id')
            ->selectRaw(
                'sum(l7) as l7,
            sum(p7) as p7,
            sum(l13) as l13,
            sum(p13) as p13,
            sum(l16) as l16,
            sum(p16) as p16,
            sum(l19) as l19,
            sum(p19) as p19',
            )
            ->get();
        $logjumPartsekolah = [];

        foreach ($logdataPartsekolah as $itemk) {
            $logjumPartsekolah[] = $itemk->l7 + $itemk->p7 + $itemk->l13 + $itemk->p13 + $itemk->l16 + $itemk->p16 + $itemk->l19 + $itemk->p19;
        }

        // Barchart Ptssekolah
        $dataDesaPtssekolah = Ptssekolah::groupBy('desa_id')
            ->select('desa_id')
            ->selectRaw(
                'sum(lsd) as lsd,
            sum(psd) as psd,
            sum(lsmp) as lsmp,
            sum(psmp) as psmp,
            sum(lsma) as lsma,
            sum(psma) as psma',
            )
            ->get();

        $desaPtssekolah = [];
        $jumPtssekolah = [];
        foreach ($dataDesaPtssekolah as $item) {
            $desaPtssekolah[] = $item->desa->nama_desa;
            $jumPtssekolah[] = $item->lsd + $item->psd + $item->lsmp + $item->psmp + $item->lsma + $item->psma;
        }
        // dd($jumPtssekolah);

        // Piechart Ptssekolah
        $dataPtssekolah = Ptssekolah::selectRaw(
            'sum(lsd) as lsd,
            sum(psd) as psd,
            sum(lsmp) as lsmp,
            sum(psmp) as psmp,
            sum(lsma) as lsma,
            sum(psma) as psma',
        )->get();
        foreach ($dataPtssekolah as $piechartPtssekolah) {
        }

        // Logchart Ptssekolah
        $logdataPtssekolah = Ptssekolah::groupBy('tahun_id')
            ->selectRaw(
                'sum(lsd) as lsd,
            sum(psd) as psd,
            sum(lsmp) as lsmp,
            sum(psmp) as psmp,
            sum(lsma) as lsma,
            sum(psma) as psma',
            )
            ->get();
        $logjumPtssekolah = [];

        foreach ($logdataPtssekolah as $itemk) {
            $logjumPtssekolah[] = $itemk->lsd + $itemk->psd + $itemk->lsmp + $itemk->psmp + $itemk->lsma + $itemk->psma;
        }
        // dd($logjumPtssekolah);
        
         // Barchart Data Guru
         $dataDesaJumguru = Jumguru::groupBy('tahun_id')
            ->select('tahun_id')
            ->selectRaw(
                'sum(jum) as jum',
            )
            ->get();

        $desaJumguru = [];
        $jumJumguru = [];
        foreach ($dataDesaJumguru as $item) {
            $desaJumguru[] = $item->tahun->nama_tahun;
            $jumJumguru[] = $item->jum;
        }
        // dd($jumJumguru);
        
        // Piechart Data Guru
        $dataJumguru = Jumguru::selectRaw(
            'sum(l) as l,
            sum(p) as p',
        )->get();
        foreach ($dataJumguru as $piechartJumguru) {
        }

        // Logchart Data Guru
        $logdataJumguru = Jumguru::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as l,
            sum(p) as p',
            )
            ->get();
        $logjumJumguru = [];

        foreach ($logdataJumguru as $itemk) {
            $logjumJumguru[] = $itemk->l + $itemk->p;
        }
        
        return view('landing.welcome', compact(
        'desa', 
        'jum', 
        'piechartKmtIbu', 
        'piechartKmtBayi', 
        'piechartHiv', 
        'piechartPartsekolah', 
        'piechartPtssekolah',
        'piechartJumguru', 
        'jumKematian', 
        'desaKmtbayi', 
        'jumKmtbayi', 
        'desaHiv', 
        'desaPartsekolah', 
        'desaPtssekolah', 
        'desaJumguru', 
        'jumHiv', 
        'jumPartsekolah', 
        'jumPtssekolah', 
        'jumJumguru', 
        'logjumKmtbayi', 
        'logjumHiv', 
        'logjumPartsekolah',
        'logjumPtssekolah',
        'logjumJumguru',
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
