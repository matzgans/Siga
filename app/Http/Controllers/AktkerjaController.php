<?php

namespace App\Http\Controllers;

use App\Models\{Aktkerja, Tahun, Desa};
use Illuminate\Http\Request;

class AktkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'aktkerja';
        $pageTitle = 'Ankatan Kerja Bidang Pendidikan';
        $tahun = Tahun::get();
        $desa = Desa::get();
        $data = Aktkerja::all();
        return view('bidang_ekonomi.aktkerja-index', compact('active','pageTitle','tahun','desa','tahun', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Aktkerja::where('desa_id', $request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Aktkerja::create($request->all());
                return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
            }
        }else{
            Aktkerja::create($request->all());
            return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aktkerja  $aktkerja
     * @return \Illuminate\Http\Response
     */
    public function show(Aktkerja $aktkerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aktkerja  $aktkerja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'aktkerjaedit';
        $pageTitle = 'Ankatan Kerja Bidang Pendidikan Edit';
        $data = Aktkerja::FindOrFail($id);
        $tahun = Tahun::get();
        $desa = Desa::get();
        return view('bidang_ekonomi.aktkerja-edit', compact('active', 'pageTitle', 'data', 'desa', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aktkerja  $aktkerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Aktkerja::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('aktkerja.index')->with('message', 'Berhasil Ubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aktkerja  $aktkerja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Aktkerja::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Berhasil Ubah Data');
    }
}
