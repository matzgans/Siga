<?php

namespace App\Http\Controllers;

use App\Models\{Partsekolah,  Desa, Tahun};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\Style;
use Rap2hpoutre\FastExcel\FastExcel;

class PartsekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = "partsekolah";
        $pageTitle = "angka partisipasi sekolah";
        $tahun = Tahun::all();
        $desa = Desa::all();
        $data = Partsekolah::all();
        return view('bidang_pendidikan.partsekolah-index', compact('active', 'data', 'pageTitle', 'tahun', 'desa'));
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
        $partsekolah = Partsekolah::get();
        return (new FastExcel(Partsekolah::all()))->HeaderStyle($style)->rowsStyle($rows_style)->download('file.xlsx', function ($partsekolah) {
            return [

                'Tahun'=>$partsekolah->tahun->nama_tahun,
                'Desa' => $partsekolah->desa->nama_desa,
                'Laki - Laki (Umur 7-12)' => $partsekolah->l7.' %',
                'Perempuan (Umur 7-12)' => $partsekolah->p7.' %',
                'Laki - Laki (Umur 13 - 15)' => $partsekolah->l13.' %',
                'Perempuan (Umur 13 - 15)' => $partsekolah->p13.' %',
                'Laki - Laki (Umur 16 - 18)' => $partsekolah->l16.' %',
                'Perempuan (Umur 16 - 18)' => $partsekolah->p16.' %',
                'Laki - Laki (Umur 19 - 24)' => $partsekolah->l19.' %',
                'Perempuan (Umur 19 - 24)' => $partsekolah->p19.' %',
                'Ket' => $partsekolah->ket,
                'Sumber' => $partsekolah->sumber,
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
        $data = Partsekolah::where('desa_id',$request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                Alert::error('Gagal', 'Data desa dengan tahun yang sama telah ada');
                return redirect()->back();
            }else{
                Partsekolah::create(
                    $request->all()
                );
                Alert::success('Berhasil', 'Data Telah Ditambahkan');
                return redirect()->back();
            }
        }else{
            Partsekolah::create(
                $request->all()
            );
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partsekolah  $partsekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Partsekolah $partsekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partsekolah  $partsekolah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Partsekolah::FindOrFail($id);
        $active =  'partsekolahedit';
        $pageTitle =  'partsipisasi sekolah';
        $desa = Desa::all();
        $tahun = Tahun::all();
        return view('bidang_pendidikan.partsekolah-edit', compact('data', 'active', 'pageTitle', 'desa', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partsekolah  $partsekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Partsekolah::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil', 'Data Telah Ditambahkan');
        return redirect()->route('partsekolah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partsekolah  $partsekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Partsekolah::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
