<?php

namespace App\Http\Controllers;

use App\Models\{Klasprespend, Desa, Tahun};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Rap2hpoutre\FastExcel\FastExcel;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;


class KlasprespendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'klasprespend';
        $pageTitle = 'Klasifikasi Presentase Penduduk';
        $data = Klasprespend::all();
        $desa = Desa::all();
        $tahun = Tahun::all();
        return view('ipg.klasprespend-index', compact('data','active','pageTitle', 'tahun', 'desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetak()
    {
        $penduduk = klasprespend::get();
        $header_style = (new Style())
        ->setFontBold()
        ->setFontSize(15);
            
    
        return (new FastExcel(klasprespend::all()))->headerStyle($header_style)->download('file.xlsx', function ($klasprespend) {
            return [
                'Tahun' => $klasprespend->tahun->nama_tahun,
                'Desa' => $klasprespend->desa->nama_desa,
                'Laki - Laki' => $klasprespend->l,
                'Perempuan' => $klasprespend->p,
                'keterangan' => $klasprespend->ket,
                'sumber' => $klasprespend->sumber,
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
        $data = Klasprespend::where('desa_id', $request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                Alert::error('Gagal', 'Data desa dengan tahun yang sama telah ada');
                return redirect()->back();
            }else{
                Klasprespend::create($request->all());
                Alert::success('Berhasil', 'Data Telah Ditambahkan');
                return redirect()->back();
            }
        }else{
            Klasprespend::create($request->all());
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klasprespend  $klasprespend
     * @return \Illuminate\Http\Response
     */
    public function show(Klasprespend $klasprespend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klasprespend  $klasprespend
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'klasprespendedit';
        $pageTitle = 'Klasifikasi Presentase Penduduk Edit';
        $data = Klasprespend::FindOrFail($id);
        $desa = Desa::all();
        $tahun = Tahun::all();
        return view('ipg.klasprespend-edit', compact('data','active','pageTitle', 'tahun', 'desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klasprespend  $klasprespend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Klasprespend::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('klasprespend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klasprespend  $klasprespend
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Klasprespend::FindOrFail($id);
        $data->delete();
        
        return redirect()->back();
    }
}
