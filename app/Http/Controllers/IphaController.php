<?php

namespace App\Http\Controllers;

use App\Models\{Ipha, Tahun};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class IphaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'ipha';
        $pageTitle = 'IPHA';
        $tahun = Tahun::get();
        $data = Ipha::all();
        return view('ipha.ipha-index', compact('active', 'pageTitle','tahun', 'data'));
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
        $ipha = Ipha::get();
        return (new FastExcel(Ipha::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($ipha) {
            return [

                'Tahun'=>$ipha->tahun->nama_tahun,
                'Klaster'=>$ipha->klaster,
                'Bobot'=>$ipha->bobot,
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
            'tahun_id'=>['integer'],
        ]);
        $data = Ipha::where('klaster', $request->klaster)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                Alert::error('Gagal', 'Data desa dengan tahun yang sama telah ada');
                return redirect()->back();
            }else{
                Ipha::create($request->all());
                Alert::success('Berhasil', 'Data Telah Ditambahkan');
                return redirect()->back();
            }
        }else{
            Ipha::create($request->all());
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ipha  $ipha
     * @return \Illuminate\Http\Response
     */
    public function show(Ipha $ipha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ipha  $ipha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'ipha';
        $pageTitle = 'Edit IPHA';
        $tahun = Tahun::get();
        $data = Ipha::FindOrFail($id);
        return view('ipha.ipha-edit', compact('active', 'pageTitle','tahun', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ipha  $ipha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Ipha::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('ipha.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ipha  $ipha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ipha::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
