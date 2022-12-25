<?php

namespace App\Http\Controllers;

use App\Models\Jumguru;
use App\Models\Jumkades;
use App\Models\Tahun;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class JumkadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'jumkades';
        $pageTitle = 'Jumlah Kepala Desa';
        $data = Jumkades::get();
        $tahun = Tahun::get();
        return view('bidang_politik.jumkades-index', compact('active','pageTitle','data','tahun'));
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
        $jumkades = Jumkades::get();
        return (new FastExcel(Jumkades::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($jumkades) {
            return [

                'Tahun'=>$jumkades->tahun->nama_tahun,
                'Laki - Laki' => $jumkades->l,
                'Perempuan' => $jumkades->p,
                'Ket' => $jumkades->ket,
                'Sumber' => $jumkades->sumber,
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
        $data = Jumkades::where('tahun_id',$request->tahun_id)->first();
        if($data != null){
            Alert::error('Gagal', 'Data dengan tahun yang sama telah ada');
            return redirect()->back();
        }else{
            Jumkades::create($request->all());
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumkades  $jumkades
     * @return \Illuminate\Http\Response
     */
    public function show(Jumkades $jumkades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumkades  $jumkades
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Jumkades::FindOrFail($id);
        $tahun = Tahun::get();
        $active = 'Jumkadesedit';
        $pageTitle = 'Jumlah Kades Edit';
        return view('bidang_politik.jumkades-edit', compact('data', 'active', 'pageTitle','tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumkades  $jumkades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Jumkades::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('jumkades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumkades  $jumkades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jumkades::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
