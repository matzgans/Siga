<?php

namespace App\Http\Controllers;

use App\Models\{Desa, Opd, Tahun, Agama, Pekerjaan, Pkematian, Hiv, Ptssekolah, Kmtbayi, Partsekolah, Bsda, Aktkerja, Ipha, Jumguru, Jumkekerasan, Klasprespend, Prespenduduk, Jumkades, Plapa, Disabilitas, Pns, Dprd, Jumkerlok};

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
        // Penduduk menurt jk
        $pendudukLaki = Klasprespend::sum('l');
        $pendudukPerempuan = Klasprespend::sum('p');
        // kematian Ibu hamil
        $dataKmtIbu = Pkematian::selectRaw(
            'sum(jum_partuslama) as partusLama,
        sum(jum_infeksi) as infeksi,
        sum(jum_hirpetensi) as hirpetensi,
        sum(jum_pendarahan) as pendarahan,
        sum(jum_penyebablain) as penyelain',
        )->get();
        foreach ($dataKmtIbu as $itemk) {
            $jumKematianIbu = $itemk->partusLama + $itemk->infeksi + $itemk->hirpetensi + $itemk->pendarahan + $itemk->penyelain;
        }
        // Data Klaster
        $dataKlaster = Ipha::sum('bobot');
        // Data Kererasan
        $jumKerL = Jumkekerasan::sum('l');
        $jumKerP = Jumkekerasan::sum('p');

        return view('dashboard.dashboard-index', compact('pendudukLaki', 'pendudukPerempuan', 'active', 'desa', 'opd', 'pekerjaan', 'tahun', 'agama', 'pageTitle', 'jumKematianIbu', 'dataKlaster', 'jumKerL', 'jumKerP'));
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

        // IPG
        // BARCHART_PRES_PENDUDUK
        $dataDesaKlasprespenduduk = Klasprespend::groupBy('desa_id')
            ->select('desa_id')
            ->selectRaw(
                'sum(l) as l,
                sum(p) as p',
            )
            ->get();

        $desaKlasprespenduduk = [];
        $jumKlasprespenduduk = [];
        foreach ($dataDesaKlasprespenduduk as $item) {
            $desaKlasprespenduduk[] = $item->desa->nama_desa;
            $jumKlasprespenduduk[] = $item->l + $item->p;
        }
        // dd($jumKlasprespenduduk);

        // PIECHART_PRES_PENDUDUK
        $dataKlasprespend = Klasprespend::selectRaw(
            'sum(l) as co,
            sum(p) as ce',
        )->get();
        foreach ($dataKlasprespend as $piechartKlasprespend) {
        }

        // LOG_PRES_PENDUDUK
        $logdataKlasprespend = Klasprespend::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as co,
                sum(p) as ce',
            )
            ->get();
        // dd($dataKematian);
        $logjumKlasprespend = [];

        foreach ($logdataKlasprespend as $itemk) {
            $logjumKlasprespend[] = $itemk->co + $itemk->ce;
        }

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

        // Bidang SDA
        // barchart korban bencana
        $dataBencana = Bsda::groupBy('bencana_id')
            ->select('bencana_id')
            ->selectRaw(
                'sum(lan) as lan,
            sum(pan) as pan,
            sum(ldes) as ldes,
            sum(pdes) as pdes',
            )
            ->get();

        $jenis_bencana = [];
        $jum_bencana = [];
        foreach ($dataBencana as $item) {
            $jenis_bencana[] = $item->bencana->nama_bencana;
            $jum_bencana[] = $item->lan + $item->pan + $item->ldes + $item->pdes;
        }
        // piechart korban bencana
        $bencana_jk = Bsda::selectRaw(
            'sum(lan) as lan,
            sum(pan) as pan,
            sum(ldes) as ldes,
            sum(pdes) as pdes',
        )->get();
        foreach ($bencana_jk as $piechartkorbencana) {
        }
        // Logchart Korban Bencana
        $logdataKorbencana = Bsda::groupBy('tahun_id')
            ->selectRaw(
                'sum(lan) as lan,
            sum(pan) as pan,
            sum(ldes) as ldes,
            sum(pdes) as pdes',
            )
            ->get();
        $logjumKorbencana = [];

        foreach ($logdataKorbencana as $itemk) {
            $logjumKorbencana[] = $itemk->ldes + $itemk->pdes + $itemk->lan + $itemk->pan;
        }

        // Bidang SDA
        // barchart aktkerja
        $dataAktkerja = Aktkerja::groupBy('desa_id')
            ->select('desa_id')
            ->selectRaw(
                'sum(lsd) as lsd,
            sum(psd) as psd,
            sum(lsmp) as lsmp,
            sum(psmp) as psmp,
            sum(lsma) as lsma,
            sum(psma) as psma,
            sum(lpt) as lpt,
            sum(ppt) as ppt',
            )
            ->get();

        $desa_aktkerja = [];
        $jum_aktkerja = [];
        foreach ($dataAktkerja as $item) {
            $desa_aktkerja[] = $item->desa->nama_desa;
            $jum_aktkerja[] = $item->lsd + $item->psd + $item->lsmp + $item->psmp + $item->lsma + $item->psma + $item->lpt + $item->ppt;
        }
        // piechart Angkatan Kerja
        $aktkerja_jk = Aktkerja::selectRaw(
            'sum(lsd) as lsd,
            sum(psd) as psd,
            sum(lsmp) as lsmp,
            sum(psmp) as psmp,
            sum(lsma) as lsma,
            sum(psma) as psma,
            sum(lpt) as lpt,
            sum(ppt) as ppt',
        )->get();
        foreach ($aktkerja_jk as $piechart_aktkerja) {
        }
        // Logchart Angkatan Kerja
        $logdataAktkerja = Aktkerja::groupBy('tahun_id')
            ->selectRaw(
                'sum(lsd) as lsd,
            sum(psd) as psd,
            sum(lsmp) as lsmp,
            sum(psmp) as psmp,
            sum(lsma) as lsma,
            sum(psma) as psma,
            sum(lpt) as lpt,
            sum(ppt) as ppt',
            )
            ->get();
        $logjumAktkerja = [];

        foreach ($logdataAktkerja as $itemk) {
            $logjumAktkerja[] = $item->lsd + $item->psd + $item->lsmp + $item->psmp + $item->lsma + $item->psma + $item->lpt + $item->ppt;
        }

        // Barchart Data Guru
        $dataDesaJumguru = Jumguru::groupBy('tahun_id')
            ->select('tahun_id')
            ->selectRaw(
                'sum(l) as l,
                sum(p) as p'
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

        // BIDANG POLITIK
        // Barchart JumKades
        $dataDesaJumkades = Jumkades::groupBy('tahun_id')
            ->select('tahun_id')
            ->selectRaw(
                'sum(l) as l,
                sum(p) as p',
            )
            ->get();

        $desaJumkades = [];
        $jumJumkades = [];
        foreach ($dataDesaJumkades as $item) {
            $desaJumkades[] = $item->tahun->nama_tahun;
            $jumJumkades[] = $item->l + $item->p;
        }

        // Piechart Jumkades
        $dataJumkades = Jumkades::selectRaw(
            'sum(l) as l,
            sum(p) as p',
        )->get();
        foreach ($dataJumkades as $piechartJumkades) {
        }

        // LogJumkades
        $logdataJumkades = Jumkades::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as l,
            sum(p) as p',
            )
            ->get();
        $logjumJumkades = [];

        foreach ($logdataJumkades as $itemk) {
            $logjumJumkades[] = $itemk->l + $itemk->p;
        }

        // BIDANG HUKUM
        // Barchart plapas
        $dataDesaPlapas = Plapa::groupBy('tahun_id')
            ->select('tahun_id')
            ->selectRaw(
                'sum(l) as l,
                sum(p) as p',
            )
            ->get();

        $desaPlapas = [];
        $jumPlapas = [];
        foreach ($dataDesaPlapas as $item) {
            $desaPlapas[] = $item->tahun->nama_tahun;
            $jumPlapas[] = $item->l + $item->p;
        }

        // Piechart Plapas
        $dataPlapas = Plapa::selectRaw(
            'sum(l) as l,
            sum(p) as p',
        )->get();
        foreach ($dataPlapas as $piechartPlapas) {
        }

        // LogPlapas
        $logdataPlapas = Plapa::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as l,
            sum(p) as p',
            )
            ->get();
        $logjumPlapas = [];

        foreach ($logdataPlapas as $itemk) {
            $logjumPlapas[] = $itemk->l + $itemk->p;
        }

        // Barchart Disabilitas
        $dataDesaDisabilitas = Disabilitas::groupBy('tahun_id')
            ->select('tahun_id')
            ->selectRaw(
                'sum(l) as l,
                sum(p) as p',
            )
            ->get();

        $desaDisabilitas = [];
        $jumDisabilitas = [];
        foreach ($dataDesaDisabilitas as $item) {
            $desaDisabilitas[] = $item->tahun->nama_tahun;
            $jumDisabilitas[] = $item->l + $item->p;
        }

        // Piechart Disabilitas
        $dataDisabilitas = Disabilitas::selectRaw(
            'sum(l) as l,
            sum(p) as p',
        )->get();
        foreach ($dataDisabilitas as $piechartDisabilitas) {
        }

        // LogDisabilitas
        $logdataDisabilitas = Disabilitas::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as l,
            sum(p) as p',
            )
            ->get();
        $logjumDisabilitas = [];

        foreach ($logdataDisabilitas as $itemk) {
            $logjumDisabilitas[] = $itemk->l + $itemk->p;
        }

        // Barchart PNS
        $dataDesaPns = Pns::groupBy('golongan')
            ->select('golongan')
            ->selectRaw(
                'sum(l) as l,
                sum(p) as p',
            )
            ->get();

        $desaPns = [];
        $jumPns = [];
        foreach ($dataDesaPns as $item) {
            $desaPns[] = $item->golongan;
            $jumPns[] = $item->l + $item->p;
        }

        // Piechart PNS
        $dataPns = Pns::selectRaw(
            'sum(l) as l,
            sum(p) as p',
        )->get();
        foreach ($dataPns as $piechartPns) {
        }

        // LogPNS
        $logdataPns = Pns::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as l,
            sum(p) as p',
            )
            ->get();
        $logjumPns = [];

        foreach ($logdataPns as $itemk) {
            $logjumPns[] = $itemk->l + $itemk->p;
        }

        // Barchart DPRD
        $dataDesaDprd = Dprd::groupBy('komisi')
            ->select('komisi')
            ->selectRaw(
                'sum(l) as l,
                sum(p) as p',
            )
            ->get();

        $desaDprd = [];
        $jumDprd = [];
        foreach ($dataDesaDprd as $item) {
            $desaDprd[] = $item->komisi;
            $jumDprd[] = $item->l + $item->p;
        }

        // Piechart DPRD
        $dataDprd = Dprd::selectRaw(
            'sum(l) as l,
            sum(p) as p',
        )->get();
        foreach ($dataDprd as $piechartDprd) {
        }

        // LogDPRD
        $logdataDprd = Dprd::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as l,
            sum(p) as p',
            )
            ->get();
        $logjumDprd = [];

        foreach ($logdataDprd as $itemk) {
            $logjumDprd[] = $itemk->l + $itemk->p;
        }

        // BIDANG KEKERASAN
        // Barchart Kekerasan
        $dataDesaJumkekerasan = Jumkekerasan::groupBy('desa_id')
            ->select('desa_id')
            ->selectRaw(
                'sum(l) as l,
                sum(p) as p',
            )
            ->get();

        $desaJumkekerasan = [];
        $jumJumkekerasan = [];
        foreach ($dataDesaJumkekerasan as $item) {
            $desaJumkekerasan[] = $item->desa->nama_desa;
            $jumJumkekerasan[] = $item->l + $item->p;
        }

        // Piechart Kekerasan
        $dataJumkekerasan = Jumkekerasan::selectRaw(
            'sum(l) as l,
            sum(p) as p',
        )->get();
        foreach ($dataJumkekerasan as $piechartJumkekerasan) {
        }

        // LogKekerasan
        $logdataJumkekerasan = Jumkekerasan::groupBy('tahun_id')
            ->selectRaw(
                'sum(l) as l,
            sum(p) as p',
            )
            ->get();
        $logjumJumkekerasan = [];

        foreach ($logdataJumkekerasan as $itemk) {
            $logjumJumkekerasan[] = $itemk->l + $itemk->p;
        }

        // Bidang Kekerasan Lokasi
        // Barchart Kekerasan
        $dataDesaJumkekerasanP = Jumkerlok::groupBy('desa_id')
            ->select('desa_id')
            ->selectRaw(
                'sum(bs) as bs,
                sum(sd) as sd,
                sum(smp) as smp,
                sum(sma) as sma,
                sum(pt) as pt',
            )
            ->get();

        $desaJumkekerasanP = [];
        $jumJumkekerasanP = [];
        foreach ($dataDesaJumkekerasanP as $item) {
            $desaJumkekerasanP[] = $item->desa->nama_desa;
            $jumJumkekerasanP[] = $item->bs + $item->sd + $item->smp + $item->sma + $item->pt;
        }

        // Piechart Kekerasan
        $dataJumkekerasanP = Jumkerlok::selectRaw(
            'sum(bs) as bs,
                sum(sd) as sd,
                sum(smp) as smp,
                sum(sma) as sma,
                sum(pt) as pt',
        )->get();
        foreach ($dataJumkekerasanP as $piechartJumkekerasanP) {
        }

        // LogKekerasan
        $logdataJumkekerasanP = Jumkerlok::groupBy('tahun_id')
            ->selectRaw(
                'sum(bs) as bs,
                sum(sd) as sd,
                sum(smp) as smp,
                sum(sma) as sma,
                sum(pt) as pt',
            )
            ->get();
        $logjumJumkekerasanP = [];

        foreach ($logdataJumkekerasanP as $itemk) {
            $logjumJumkekerasanP[] = $item->bs + $item->sd + $item->smp + $item->sma + $item->pt;
        }


        $dataDesaIpha = Ipha::all();

        $desaIpha = [];
        $jumIpha = [];
        foreach ($dataDesaIpha as $item) {
            $desaIpha[] = $item->klaster;
            $jumIpha[] = $item->bobot;
        }

        return view(
            'landing.welcome',
            compact(
                'desaKlasprespenduduk',
                'jumKlasprespenduduk',
                'desa',
                'jum',
                'piechartKlasprespend',
                'piechartKmtIbu',
                'piechartKmtBayi',
                'piechartHiv',
                'piechartPartsekolah',
                'piechartPtssekolah',
                'piechartJumguru',
                'piechartkorbencana',
                'piechart_aktkerja',
                'piechartJumkades',
                'piechartPlapas',
                'piechartDisabilitas',
                'piechartPns',
                'piechartDprd',
                'piechartJumkekerasan',
                'piechartJumkekerasanP',
                'jumKematian',
                'desaKmtbayi',
                'desaHiv',
                'desaPartsekolah',
                'desaPtssekolah',
                'desaJumguru',
                'desa_aktkerja',
                'desaJumkades',
                'desaPlapas',
                'desaDisabilitas',
                'desaPns',
                'desaDprd',
                'desaJumkekerasan',
                'desaJumkekerasanP',
                'desaIpha',
                'jenis_bencana',
                'jumKmtbayi',
                'jumHiv',
                'jumPartsekolah',
                'jumPtssekolah',
                'jumJumguru',
                'jum_bencana',
                'jum_aktkerja',
                'jumJumkades',
                'jumPlapas',
                'jumDisabilitas',
                'jumPns',
                'jumDprd',
                'jumJumkekerasan',
                'jumJumkekerasanP',
                'jumIpha',
                'logjumKlasprespend',
                'logjumKmtbayi',
                'logjumHiv',
                'logjumPartsekolah',
                'logjumPtssekolah',
                'logjumJumguru',
                'logjumKorbencana',
                'logjumAktkerja',
                'logjumJumkades',
                'logjumPlapas',
                'logjumDisabilitas',
                'logjumPns',
                'logjumDprd',
                'logjumJumkekerasan',
                'logjumJumkekerasanP',
            ),
        );
    }

    public function ipgPenduduk()
    {
        $title = 'Data Persentase Penduduk';
        $subtitle = 'Data dajdajd daidhadnada dadiahdiad adihadahr ahairhairhriara  arahriahrai arairiayriy';
        return view('landing.landing-ipg-penduduk', compact('title', 'subtitle'));
    }

    public function ipgJenkel()
    {
        $title = 'Data Penduduk Menurut Jenis Kelamin';
        $subtitle = 'Data ini memuat jumlah penduduk menurut jenis kelamin dari penduduk yang ada dikabupaten Bonebolango';
        $data = Klasprespend::get();
        return view('landing.landing-ipg-jenkel', compact('title', 'subtitle', 'data'));
    }

    public function ipgUmur()
    {
        $title = 'Data Kelompok Umur';
        $subtitle = 'Data ini memuat jumlah penduduk menurut kelompok umur dari penduduk yang ada dikabupaten Bonebolango';
        $data = Prespenduduk::get();
        return view('landing.landing-ipg-umur', compact('title', 'subtitle', 'data'));
    }

    public function ipgPendidikan()
    {
        $data = Ptssekolah::all();
        $title = 'Data Pendidikan Terakhir';
        $subtitle = 'Data ini memuat jumlah penduduk menurut pendidikan terakhir dari penduduk yang ada dikabupaten Bonebolango';
        return view('landing.landing-ipg-pendidikan', compact('title', 'subtitle', 'data'));
    }

    public function bkesehatan()
    {
        $data = Pkematian::all();
        $dataKmtbayi = Kmtbayi::all();
        $hiv = Hiv::all();
        $title = 'Data Terpilah Bidang Kesehatan';
        $subtitle = 'Data Kesehatan merupakan data dari jumlah kematian ibu, jumlah kematian bayi, dan jumlah penderita HIV yang ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-kes', compact('title', 'subtitle', 'data', 'hiv', 'dataKmtbayi'));
    }

    public function bpendidikan()
    {
        $data = Partsekolah::all();
        $ptsSekolah = Ptssekolah::all();
        $jumGuru = Jumguru::all();
        $title = 'Data Terpilah Bidang Pendidikan';
        $subtitle = 'Data Pendidikan merupakan data dari persentase partisipasi sekolah, persentase putus sekolah, dan jumlah guru yang ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-pend', compact('title', 'subtitle', 'data', 'ptsSekolah', 'jumGuru'));
    }

    public function bsda()
    {
        $data = Bsda::all();
        $title = 'Data Terpilah Bidang Sumber Daya Alam Dan Lingkungan';
        $subtitle = 'Data Sumber Daya Alam merupakan data dari jumlah korban yang ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-sda', compact('title', 'subtitle', 'data'));
    }

    public function bekonomi()
    {
        $data = Aktkerja::all();
        $title = 'Data Terpilah Bidang Ekonomi Dan Ketenaga Kerjaan';
        $subtitle = 'Data Ekonomi merupakan data dari jumlah angkatan kerja berdasarkan pendidikan yang ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-ekonomi', compact('title', 'subtitle', 'data'));
    }

    public function bpolitik()
    {
        $data = Jumkades::all();
        $pns = Pns::all();
        $dprd = Dprd::all();
        $title = 'Data Terpilah Bidang Politik Dan Pengambilan Keputusan';
        $subtitle = 'Data Politik merupakan data dari jumlah kepala desa, jumlah pegawai negeri sipil, dan jumlah anggota dprd yang ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-politik', compact('title', 'subtitle', 'data', 'pns', 'dprd'));
    }

    public function bhukum()
    {
        $data = Plapa::all();
        $disabilitas = Disabilitas::all();
        $title = 'Data Terpilah Bidang Hukum Dan Sosial Budaya';
        $subtitle = 'Data Hukum merupakan data dari jumlah penghuni lapas dan jumlah penyandang disabilitas yang ditampilkan secara lengkap dan terupdate';
        return view('landing.terpilah-hukum', compact('title', 'subtitle', 'data', 'disabilitas'));
    }

    public function kkrsn()
    {
        $dataKr = Jumkekerasan::all();
        $data = Jumkerlok::all();
        $title = 'Data Kekerasan';
        $subtitle = 'Data Kekerasan merupakan data dari jumlah kekerasan terhadap perempuan dan anak berdasarkan lokasi dan pendidikan terakhir yang ditampilkan secara lengkap dan terupdate';
        return view('landing.kkrsn', compact('data', 'dataKr', 'title','subtitle'));
    }
}
