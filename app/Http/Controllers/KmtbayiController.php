<?php

namespace App\Http\Controllers;

use App\Models\{Kmtbayi, Desa, Tahun};
use Illuminate\Http\Request;

class KmtbayiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'kmtbayi';
        $pageTitle = 'Data Kematian Bayi';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Kmtbayi::orderBy('tahun_id', 'DESC')->get();
        return view('bidang_kesehatan.kmtbayi-index', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
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
            
        ]);

        $data = Kmtbayi::where('desa_id', $request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Kmtbayi::create([
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
            Kmtbayi::create([
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
     * @param  \App\Models\Kmtbayi  $kmtbayi
     * @return \Illuminate\Http\Response
     */
    public function show(Kmtbayi $kmtbayi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kmtbayi  $kmtbayi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'Kmtbayi';
        $pageTitle = 'Edit Data Kematian Bayi';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Kmtbayi::FindOrFail($id);
        return view('bidang_kesehatan.kmtbayi-edit', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kmtbayi  $kmtbayi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Kmtbayi::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('kmtbayi.index')->with('message', 'Berhasil Ubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kmtbayi  $kmtbayi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kmtbayi::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Berhasil Hapus Data');
    }
}
