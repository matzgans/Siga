<?php

namespace App\Http\Controllers;

use App\Models\{Pns, Tahun};
use Illuminate\Http\Request;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class PnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'pns';
        $pageTitle = 'PNS';
        $tahun = Tahun::get();
        $data = Pns::orderBy('tahun_id', 'DESC')->get();
        return view('bidang_politik.pns-index', compact('active', 'pageTitle', 'tahun', 'data'));
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
        $pns = Pns::get();
        return (new FastExcel(Pns::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($pns) {
            return [

                'Tahun'=>$pns->tahun->nama_tahun,
                'Golongan' => $pns->golongan,
                'Laki - Laki' => $pns->l,
                'Perempuan' => $pns->p,
                'Ket' => $pns->ket,
                'Sumber' => $pns->sumber,
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
        $data = Pns::where('golongan', $request->golongan)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Pns::create($request->all());
                return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
            }
        }else{
            Pns::create($request->all());
            return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pns  $pns
     * @return \Illuminate\Http\Response
     */
    public function show(Pns $pns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pns  $pns
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'pnsedit';
        $pageTitle = 'PNS Edit';
        $tahun = Tahun::get();
        $data = Pns::FindOrFail($id);
        return view('bidang_politik.pns-edit', compact('active', 'pageTitle', 'tahun', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pns  $pns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pns::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('pns.index')->with('message', 'berhasil ubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pns  $pns
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pns::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Berhasil Hapus Data');
    }
}
