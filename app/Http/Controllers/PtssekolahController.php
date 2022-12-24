<?php

namespace App\Http\Controllers;

use App\Models\{Ptssekolah, Desa, Tahun};
use Illuminate\Http\Request;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class PtssekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'ptssekolah';
        $pageTitle = 'angka putus sekolah';
        $data = Ptssekolah::all();
        $tahun = Tahun::all();
        $desa = Desa::all();
        return view('bidang_pendidikan.ptssekolah-index', compact('active', 'pageTitle', 'data', 'desa', 'tahun'));
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
        $ptssekolah = Ptssekolah::get();
        return (new FastExcel(Ptssekolah::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($ptssekolah) {
            return [

                'Tahun'=>$ptssekolah->tahun->nama_tahun,
                'Desa' => $ptssekolah->desa->nama_desa,
                'Laki - Laki (SD)' => $ptssekolah->lsd.' %',
                'Perempuan (SD)' => $ptssekolah->psd.' %',
                'Laki - Laki (SMP)' => $ptssekolah->lsmp.' %',
                'Perempuan (SMP)' => $ptssekolah->psmp.' %',
                'Laki - Laki (SMA)' => $ptssekolah->lsma.' %',
                'Perempuan (SMA)' => $ptssekolah->psma.' %',
                'Ket' => $ptssekolah->ket,
                'Sumber' => $ptssekolah->sumber,
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
        $data = Ptssekolah::where('desa_id',$request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Ptssekolah::create(
                    $request->all()
                );
                return redirect()->back();
            }
        }else{
            Ptssekolah::create(
                $request->all()
            );
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ptssekolah  $ptssekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Ptssekolah $ptssekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ptssekolah  $ptssekolah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'putussekolahedit';
        $pageTitle = 'Edit angka putus sekolah';
        $data = Ptssekolah::FindOrFail($id);
        $tahun = Tahun::all();
        $desa = Desa::all();
        return view('bidang_pendidikan.ptssekolah-edit', compact('active', 'pageTitle', 'data', 'desa', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ptssekolah  $ptssekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Ptssekolah::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('ptssekolah.index')->with('message', 'berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ptssekolah  $ptssekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ptssekolah::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'berhasil hapus data');
    }
}
