<?php

namespace App\Http\Controllers;

use App\Models\{Prespenduduk, Desa, Tahun};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Rap2hpoutre\FastExcel\FastExcel;

class PrespendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'prespenduduk';
        $pageTitle = 'Jum Penduduk';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Prespenduduk::orderBy('tahun_id', 'DESC')->get();
        return view('ipg.jumpenduduk-index', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetak()
    {
        $penduduk = Prespenduduk::get();
        return (new FastExcel(Prespenduduk::all()))->download('file.xlsx', function ($penduduk) {
            return [
                'Tahun' => $penduduk->tahun->nama_tahun,
                'Desa' => $penduduk->desa->nama_desa,
                'Laki - Laki (0-5 Tahun)' => $penduduk->l6,
                'Perempuan (0-5 Tahun)' => $penduduk->p0,
                'Laki - Laki (6-12 Tahun)' => $penduduk->l6,
                'Perempuan (6-12 Tahun)' => $penduduk->p6,
                'Laki - Laki (13-17 Tahun)' => $penduduk->l13,
                'Perempuan (13-17 Tahun)' => $penduduk->p13,
                'Laki - Laki (18-50 Tahun)' => $penduduk->l18,
                'Perempuan (18-50 Tahun)' => $penduduk->p18,
                'Laki - Laki (51+ Tahun)' => $penduduk->l51,
                'Perempuan (51+ Tahun)' => $penduduk->p51,
                'Keterangan' => $penduduk->ket,
                'Sumber' => $penduduk->sumber,
            ];
        });
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Prespenduduk::where('desa_id',$request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                Alert::error('Gagal', 'Data desa dengan tahun yang sama telah ada');
                return redirect()->back();
            }else{
                Prespenduduk::create(
                    $request->all()
                );
                Alert::success('Berhasil', 'Data Telah Ditambahkan');
                return redirect()->back();
            }
        }else{
            Prespenduduk::create(
                $request->all()
            );
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prespenduduk  $prespenduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Prespenduduk $prespenduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prespenduduk  $prespenduduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'prespenduduk_edit';
        $pageTitle = 'Jumlah Penduduk menurut Jenis Kelamin';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Prespenduduk::FindOrFail($id);
        return view('ipg.jumpenduduk-edit', compact('data', 'desa', 'tahun', 'active', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prespenduduk  $prespenduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

        ]);

        $data = Prespenduduk::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('prespenduduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prespenduduk  $prespenduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Prespenduduk::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
