<?php

namespace App\Http\Controllers;

use App\Models\{Pkematian, Desa, Tahun};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class PkematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'pkematian';
        $pageTitle = 'Penyebab Kematian';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Pkematian::orderBy('tahun_id', 'DESC')->get();
        return view('bidang_kesehatan.pkematian-index', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
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
        $pkematian = Pkematian::get();
        return (new FastExcel(Pkematian::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($pkematian) {
            return [

                'Tahun'=>$pkematian->tahun->nama_tahun,
                'Desa' => $pkematian->desa->nama_desa,
                'Partus Lama' => $pkematian->jum_partuslama,
                'Infeksi' => $pkematian->jum_infeksi,
                'Hipertensi' => $pkematian->jum_hirpetensi,
                'Pendarahan' => $pkematian->jum_pendarahan,
                'Penyebab Lain' => $pkematian->jum_penyebablain,
                'Ket' => $pkematian->ket,
                'Sumber' => $pkematian->sumber,
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
        $data = Pkematian::where('desa_id',$request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                Alert::error('Gagal', 'Data desa dengan tahun yang sama telah ada');
                return redirect()->back();
            }else{
                Pkematian::create([
                    'desa_id'=>$request->desa_id,
                    'jum_partuslama'=>$request->jum_partuslama,
                    'jum_infeksi'=>$request->jum_infeksi,
                    'jum_hirpetensi'=>$request->jum_hirpetensi,
                    'jum_pendarahan'=>$request->jum_pendarahan,
                    'jum_penyebablain'=>$request->jum_penyebablain,
                    'sumber'=>ucfirst($request->sumber),
                    'ket'=>ucfirst($request->ket),
                    'tahun_id'=>$request->tahun_id,
                ]);
                Alert::success('Berhasil', 'Data Telah Ditambahkan');
                return redirect()->back();
            }
        }else{
            Pkematian::create([
                'desa_id'=>$request->desa_id,
                'jum_partuslama'=>$request->jum_partuslama,
                'jum_infeksi'=>$request->jum_infeksi,
                'jum_hirpetensi'=>$request->jum_hirpetensi,
                'jum_pendarahan'=>$request->jum_pendarahan,
                'jum_penyebablain'=>$request->jum_penyebablain,
                'sumber'=>ucfirst($request->sumber),
                'ket'=>ucfirst($request->ket),
                'tahun_id'=>$request->tahun_id,
            ]);
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pkematian  $pkematian
     * @return \Illuminate\Http\Response
     */
    public function show(Pkematian $pkematian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pkematian  $pkematian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'pkematian_edit';
        $pageTitle = 'Penyebab Kematian edit';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Pkematian::FindOrFail($id);
        return view('bidang_kesehatan.pkematian-edit', compact('data', 'desa', 'tahun', 'active', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pkematian  $pkematian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pkematian::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('pkematian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pkematian  $pkematian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pkematian::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
