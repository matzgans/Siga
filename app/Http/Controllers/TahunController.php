<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tahun::all();
        $active = 'tahun';
        $pageTitle = 'Tahun';
        return view('tahun.tahun-index', compact('data', 'active', 'pageTitle'));
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
            'nama_tahun'=> ['unique:tahuns'],
        ]);
        Tahun::create([
            'nama_tahun' => $request->nama_tahun,
        ]);
        Alert::success('Berhasil Tambah Data');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function show(Tahun $tahun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Tahun::FindOrFail($id);
        $active = 'tahunedit';
        $pageTitle = 'Tahun';
        return view('tahun.tahun-edit', compact('data', 'active', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Tahun::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil Ubah Data');
        return redirect()->route('tahun.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tahun::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
