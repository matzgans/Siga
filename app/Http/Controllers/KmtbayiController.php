<?php

namespace App\Http\Controllers;

use App\Models\{Kmtbayi, Desa, Tahun};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class KmtbayiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'kmtbayi';
        $pageTitle = 'Data Kematian Bayi';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Kmtbayi::orderBy('tahun_id', 'DESC')->get();
        return view('bidang_kesehatan.kmtbayi-index', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
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
        $kmtbayi = Kmtbayi::get();
        return (new FastExcel(Kmtbayi::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($kmtbayi) {
            return [
                'Tahun'=>$kmtbayi->tahun->nama_tahun,
                'Desa' => $kmtbayi->desa->nama_desa,
                'Laki Laki'=>$kmtbayi->l,
                'Perempuan'=>$kmtbayi->p,
                'Ket' => $kmtbayi->ket,
                'Sumber' => $kmtbayi->sumber,
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
        $request->validate([
            
        ]);

        $data = Kmtbayi::where('desa_id', $request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                Alert::error('Gagal', 'Data desa dengan tahun yang sama telah ada');
                return redirect()->back();
            }else{
                Kmtbayi::create([
                    'desa_id'=>$request->desa_id,
                    'l'=>$request->l,
                    'p'=>$request->p,
                    'tahun_id'=>$request->tahun_id,
                    'sumber'=>$request->sumber,
                    'ket'=>$request->ket,
                ]);
                Alert::success('Berhasil', 'Data Telah Ditambahkan');
                return redirect()->back();
            }
        }else{
            Kmtbayi::create([
                'desa_id'=>$request->desa_id,
                'l'=>$request->l,
                'p'=>$request->p,
                'tahun_id'=>$request->tahun_id,
                'sumber'=>$request->sumber,
                'ket'=>$request->ket,
            ]);
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kmtbayi  $kmtbayi
     * @return \Illuminate\Http\Response
     */
    public function show(Kmtbayi $kmtbayi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kmtbayi  $kmtbayi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'Kmtbayi';
        $pageTitle = 'Edit Data Kematian Bayi';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Kmtbayi::FindOrFail($id);
        return view('bidang_kesehatan.kmtbayi-edit', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kmtbayi  $kmtbayi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Kmtbayi::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('kmtbayi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kmtbayi  $kmtbayi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kmtbayi::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
