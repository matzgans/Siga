<?php

namespace App\Http\Controllers;

use App\Models\{Desa, Tahun, Disabilitas};
use Illuminate\Http\Request;

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
        $data = Disabilitas::where('desa_id', $request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Disabilitas::create($request->all());
                return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
            }
        }else{
            Disabilitas::create($request->all());
            return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
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
        return redirect()->route('disabilitas.index')->with('message', 'Berhasil Ubah Data');
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
        return redirect()->back()->with('message', 'Berhasil Hapus Data');
    }
}
