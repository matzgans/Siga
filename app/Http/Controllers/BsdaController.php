<?php

namespace App\Http\Controllers;
use App\Models\{Bsda, Bencana, Tahun};
use Illuminate\Http\Request;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class BsdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bsda::all();
        $tahun = Tahun::get();
        $bencana = Bencana::get();
        $active = 'bsda';
        $pageTitle = 'bidang sumber daya alam / Lingkungan';
        return view('bidang_sda.bsda-index', compact('data', 'active', 'pageTitle', 'bencana', 'tahun'));
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
        $bsda = Bsda::get();
        return (new FastExcel(Bsda::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($bsda) {
            return [

                'Tahun'=>$bsda->tahun->nama_tahun,
                'Bencana' => $bsda->bencana->nama_bencana,
                'Laki - Laki (Anak -Anak)' => $bsda->lan,
                'Perempuan (Anak -Anak)' => $bsda->pan,
                'Laki - Laki (Dewasa)' => $bsda->ldes,
                'Perempuan (Dewasa)' => $bsda->pdes,
                'Ket' => $bsda->ket,
                'Sumber' => $bsda->sumber,
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
        $data = Bsda::where('bencana_id', $request->bencana_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Bsda::create($request->all());
                return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
            }
        }else{
            Bsda::create($request->all());
            return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bsda  $bsda
     * @return \Illuminate\Http\Response
     */
    public function show(Bsda $bsda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bsda  $bsda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Bsda::FindOrFail($id);
        $tahun = Tahun::get();
        $bencana = Bencana::get();
        $active = 'bsdaedit';
        $pageTitle = 'bidang sumber daya alam / Lingkungan edit';
        return view('bidang_sda.bsda-edit', compact('data', 'active', 'pageTitle', 'bencana', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bsda  $bsda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Bsda::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('bsda.index')->with('message', 'Berhasil Ubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bsda  $bsda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Bsda::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('berhasil menghapus data');
    }
}
