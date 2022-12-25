<?php

namespace App\Http\Controllers;

use App\Models\{Jumguru, Tahun};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class JumguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'jumguru';
        $pageTitle = 'Jumlah Guru';
        $data = Jumguru::all();
        $tahun = Tahun::get();
        return view('bidang_pendidikan.jumguru-index', compact('active', 'pageTitle', 'data', 'tahun'));
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
        $jumguru = Jumguru::get();
        return (new FastExcel(Jumguru::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($jumguru) {
            return [
                'Tahun'=>$jumguru->tahun->nama_tahun,
                'Laki Laki'=>$jumguru->l,
                'Perempuan'=>$jumguru->p,
                'Total Jumlah'=>$jumguru->jum,
                'Ket' => $jumguru->ket,
                'Sumber' => $jumguru->sumber,
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
        $data = Jumguru::where('tahun_id',$request->tahun_id)->first();
        if($data != null){
            Alert::error('Gagal', 'Data dengan tahun yang sama telah ada');
            return redirect()->back();
        }else{
            Jumguru::create([
                'l'=>$request->l,
                'p'=>$request->p,
                'jum'=>$request->l + $request->p,
                'tahun_id'=>$request->tahun_id,
                'ket'=>$request->ket,
                'sumber'=>$request->sumber,
            ]);
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumguru  $jumguru
     * @return \Illuminate\Http\Response
     */
    public function show(Jumguru $jumguru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumguru  $jumguru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'editjumlahguru';
        $pageTitle = 'Edit Jumlah Guru';
        $data = Jumguru::FindOrFail($id);
        $tahun = Tahun::get();
        return view('bidang_pendidikan.jumguru-edit', compact('active', 'pageTitle', 'data', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumguru  $jumguru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Jumguru::FindOrFail($id);
        $data->update([
            'l'=>$request->l,
            'p'=>$request->p,
            'jum'=>$request->l + $request->p,
            'ket'=>$request->ket,
            'sumber'=>$request->sumber,
        ]);
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('jumguru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumguru  $jumguru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jumguru::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
