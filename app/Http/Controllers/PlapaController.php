<?php

namespace App\Http\Controllers;

use App\Models\{Plapa, Tahun, Tahanan};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class PlapaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'plapas';
        $pageTitle = 'Penghuni Lapas';
        $data = Plapa::get();
        $tahun = Tahun::get();
        $tahanan = Tahanan::get();
        return view('bidang_hukum.plapas-index', compact('active','pageTitle','data','tahun', 'tahanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function cetak()
    {
        $style = (new Style())->setFontBold();
        $rows_style = (new Style())
         ->setBackgroundColor("EDEDED");
        $plapa = Plapa::get();
        return (new FastExcel(Plapa::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($plapa) {
            return [

                'Tahun'=>$plapa->tahun->nama_tahun,
                'Jenis Tahanan' => $plapa->tahanan->jenis_tahanan,
                'Laki - Laki' => $plapa->l,
                'Perempuan' => $plapa->p,
                'Ket' => $plapa->ket,
                'Sumber' => $plapa->sumber,
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
        $data = Plapa::where('tahanan_id', $request->tahanan_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                Alert::error('Gagal', 'Data dengan tahun yang sama telah ada');
                return redirect()->back();
            }else{
                Plapa::create($request->all());
                Alert::success('Berhasil', 'Data Telah Ditambahkan');
                return redirect()->back();
            }
        }else{
            Plapa::create($request->all());
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plapa  $plapa
     * @return \Illuminate\Http\Response
     */
    public function show(Plapa $plapa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plapa  $plapa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'penghunilapasedit';
        $pageTitle = 'Penghuni Lapas Edit';
        $data = Plapa::FindOrFail($id);
        $tahun = Tahun::get();
        $tahanan = Tahanan::get();
        return view('bidang_hukum.plapas-edit', compact('active','pageTitle','data','tahun', 'tahanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plapa  $plapa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Plapa::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('plapas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plapa  $plapa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Plapa::FindOrFail($id);
        $data->delete();
        return redirect()->route('plapas.index');
    }
}
