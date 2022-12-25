<?php

namespace App\Http\Controllers;

use App\Models\{Desa, Tahun, Disabilitas};
use Illuminate\Http\Request;
use OpenSpout\Common\Entity\Style\Color;
use RealRashid\SweetAlert\Facades\Alert;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class DisabilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'disabilitas';
        $pageTitle = 'Disabilitas';
        $data = Disabilitas::get();
        $tahun = Tahun::get();
        $desa = Desa::get();
        return view('bidang_hukum.disabilitas-index', compact('active', 'pageTitle', 'data', 'tahun', 'desa'));
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
        $disabilitas = Disabilitas::get();
        return (new FastExcel(Disabilitas::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($disabilitas) {
            return [

                'Tahun'=>$disabilitas->tahun->nama_tahun,
                'Jenis Disabilitas' => $disabilitas->jenis_disabilitas,
                'Laki - Laki' => $disabilitas->l,
                'Perempuan' => $disabilitas->p,
                'Ket' => $disabilitas->ket,
                'Sumber' => $disabilitas->sumber,
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
        $data = Disabilitas::where('desa_id', $request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                Alert::error('Gagal', 'Data dengan tahun yang sama telah ada');
                return redirect()->back();
            }else{
                Disabilitas::create($request->all());
                Alert::success('Berhasil', 'Data Telah Ditambahkan');
                return redirect()->back();
            }
        }else{
            Disabilitas::create($request->all());
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disabilitas  $disabilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Disabilitas $disabilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disabilitas  $disabilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'disabilitas';
        $pageTitle = 'Disabilitas Edit';
        $data = Disabilitas::FindOrFail($id);
        $tahun = Tahun::get();
        $desa = Desa::get();
        return view('bidang_hukum.disabilitas-edit', compact('active', 'pageTitle', 'data', 'tahun', 'desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disabilitas  $disabilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Disabilitas::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('disabilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disabilitas  $disabilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Disabilitas::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
