<?php

namespace App\Http\Controllers;

use App\Models\{Pkematian, Desa, Tahun};
use Illuminate\Http\Request;

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
        return view('pkematian.pkematian-index', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
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
        Pkematian::create([
            'desa_id'=>$request->desa_id,
            'jum_partuslama'=>$request->jum_partuslama,
            'jum_infeksi'=>$request->jum_infeksi,
            'jum_hirpetensi'=>$request->jum_hirpetensi,
            'jum_pendarahan'=>$request->jum_pendarahan,
            'jum_penyebablain'=>$request->jum_penyebablain,
            'sumber'=>'Dinas Kesehatan',
            'tahun_id'=>$request->tahun_id,
        ]);
        return redirect()->back();
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
    public function edit(Pkematian $pkematian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pkematian  $pkematian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pkematian $pkematian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pkematian  $pkematian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pkematian $pkematian)
    {
        //
    }
}
