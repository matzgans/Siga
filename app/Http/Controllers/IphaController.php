<?php

namespace App\Http\Controllers;

use App\Models\{Ipha, Tahun};
use Illuminate\Http\Request;

class IphaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'ipha';
        $pageTitle = 'IPHA';
        $tahun = Tahun::get();
        $data = Ipha::all();
        return view('ipha.ipha-index', compact('active', 'pageTitle','tahun', 'data'));
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
        $request->validate([
            'tahun_id'=>['integer'],
        ]);
        $data = Ipha::where('klaster', $request->klaster)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Ipha::create($request->all());
                return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
            }
        }else{
            Ipha::create($request->all());
            return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ipha  $ipha
     * @return \Illuminate\Http\Response
     */
    public function show(Ipha $ipha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ipha  $ipha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'ipha';
        $pageTitle = 'Edit IPHA';
        $tahun = Tahun::get();
        $data = Ipha::FindOrFail($id);
        return view('ipha.ipha-edit', compact('active', 'pageTitle','tahun', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ipha  $ipha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Ipha::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('ipha.index')->with('message', 'berhasil ubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ipha  $ipha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ipha::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Berhasil Hapus data');
    }
}
