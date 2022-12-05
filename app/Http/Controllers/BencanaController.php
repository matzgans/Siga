<?php

namespace App\Http\Controllers;

use App\Models\Bencana;
use Illuminate\Http\Request;

class BencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'bencana';
        $pageTitle = 'Data Bencana';
        $data = Bencana::all();
        return view('bencana.bencana-index', compact('active', 'pageTitle', 'data'));
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
        Bencana::create([
            'nama_bencana'=>ucfirst($request->nama_bencana),
        ]);
        return redirect()->back()->with('message', 'Berhasil Tambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function show(Bencana $bencana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'bencanaedit';
        $pageTitle = 'Edit Data Bencana';
        $data = Bencana::FindOrFail($id);
        return view('bencana.bencana-edit', compact('active', 'pageTitle', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Bencana::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('bencana.index')->with('message', 'berhasil edit data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Bencana::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'berhasil hapus data');
    }
}
