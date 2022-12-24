<?php

namespace App\Http\Controllers;

use App\Models\Dprd;
use Illuminate\Http\Request;
use App\Models\{Tahun};
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class DprdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'dprd';
        $pageTitle = 'DPRD';
        $tahun = Tahun::get();
        $data = Dprd::orderBy('tahun_id', 'DESC')->get();
        return view('bidang_politik.dprd-index', compact('active', 'pageTitle', 'tahun', 'data'));
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
        $bsda = Dprd::get();
        return (new FastExcel(Dprd::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($dprd) {
            return [

                'Tahun'=>$dprd->tahun->nama_tahun,
                'Komisi' => $dprd->komisi,
                'Laki - Laki' => $dprd->l,
                'Perempuan' => $dprd->p,
                'Ket' => $dprd->ket,
                'Sumber' => $dprd->sumber,
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
        $data = Dprd::where('komisi', $request->komisi)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Dprd::create($request->all());
                return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
            }
        }else{
            Dprd::create($request->all());
            return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dprd  $dprd
     * @return \Illuminate\Http\Response
     */
    public function show(Dprd $dprd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dprd  $dprd
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'dprdedit';
        $pageTitle = 'DPRD Edit';
        $tahun = Tahun::get();
        $data = Dprd::FindOrFail($id);
        return view('bidang_politik.dprd-edit', compact('active', 'pageTitle', 'tahun', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dprd  $dprd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Dprd::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('dprd.index')->with('message', 'berhasil ubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dprd  $dprd
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    
    {
        $data = Dprd::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Berhasil Hapus data');
    }
}
