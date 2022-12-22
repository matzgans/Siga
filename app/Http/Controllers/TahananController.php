<?php

namespace App\Http\Controllers;

use App\Models\Tahanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TahananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'tahanan';
        $pageTitle = 'Data Tahanan';
        $data = Tahanan::all();
        return view('tahanan.tahanan-index', compact('active', 'pageTitle', 'data'));
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
        Tahanan::create($request->all());
        Alert::success('Berhasil Tambah Data');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tahanan  $tahanan
     * @return \Illuminate\Http\Response
     */
    public function show(Tahanan $tahanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tahanan  $tahanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Tahanan::FindOrFail($id);
        $active = 'tahananedit';
        $pageTitle = 'Tahanan Edit';
        return view('tahanan.tahanan-edit', compact('data','active','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tahanan  $tahanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Tahanan::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil Ubah Data');
        return redirect()->route('tahanan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tahanan  $tahanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tahanan::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
