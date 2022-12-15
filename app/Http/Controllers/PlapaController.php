<?php

namespace App\Http\Controllers;

use App\Models\{Plapa, Tahun, Tahanan};
use Illuminate\Http\Request;

class PlapaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'plapas';
        $pageTitle = 'Penghuni Lapas';
        $data = Plapa::get();
        $tahun = Tahun::get();
        $tahanan = Tahanan::get();
        return view('bidang_hukum.plapas-index', compact('active','pageTitle','data','tahun', 'tahanan'));
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
        $data = Plapa::where('tahanan_id', $request->tahanan_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Plapa::create($request->all());
                return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
            }
        }else{
            Plapa::create($request->all());
            return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plapa  $plapa
     * @return \Illuminate\Http\Response
     */
    public function show(Plapa $plapa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plapa  $plapa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'penghunilapasedit';
        $pageTitle = 'Penghuni Lapas Edit';
        $data = Plapa::FindOrFail($id);
        $tahun = Tahun::get();
        $tahanan = Tahanan::get();
        return view('bidang_hukum.plapas-edit', compact('active','pageTitle','data','tahun', 'tahanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plapa  $plapa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Plapa::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('plapas.index')->with('message', 'Berhasil Ubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plapa  $plapa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Plapa::FindOrFail($id);
        $data->delete();
        return redirect()->route('plapas.index')->with('message', 'Berhasil Hapus Data');
    }
}
