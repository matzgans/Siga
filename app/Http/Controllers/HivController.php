<?php

namespace App\Http\Controllers;

use App\Models\{Hiv, Desa, Tahun};
use Illuminate\Http\Request;

class HivController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'hiv';
        $pageTitle = 'Penderita Hiv';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Hiv::orderBy('tahun_id', 'DESC')->get();
        return view('bidang_kesehatan.hiv-index', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
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
        $data = Hiv::where('desa_id', $request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Hiv::create([
                    'desa_id'=>$request->desa_id,
                    'l'=>$request->l,
                    'p'=>$request->p,
                    'tahun_id'=>$request->tahun_id,
                    'sumber'=>$request->sumber,
                    'ket'=>$request->ket,
                ]);
                return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
            }
        }else{
            Hiv::create([
                'desa_id'=>$request->desa_id,
                'l'=>$request->l,
                'p'=>$request->p,
                'tahun_id'=>$request->tahun_id,
                'sumber'=>$request->sumber,
                'ket'=>$request->ket,
            ]);
            return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hiv  $hiv
     * @return \Illuminate\Http\Response
     */
    public function show(Hiv $hiv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hiv  $hiv
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'hiv';
        $pageTitle = 'Edit Penderita Hiv';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Hiv::FindOrFail($id);
        return view('bidang_kesehatan.hiv-edit', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hiv  $hiv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Hiv::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('hiv.index')->with('message', 'Berhasil Ubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hiv  $hiv
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Hiv::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
