<?php

namespace App\Http\Controllers;

use App\Models\{Pns, Tahun};
use Illuminate\Http\Request;

class PnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'pns';
        $pageTitle = 'PNS';
        $tahun = Tahun::get();
        $data = Pns::orderBy('tahun_id', 'DESC')->get();
        return view('bidang_politik.pns-index', compact('active', 'pageTitle', 'tahun', 'data'));
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
        $data = Pns::where('golongan', $request->golongan)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Pns::create($request->all());
                return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
            }
        }else{
            Pns::create($request->all());
            return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pns  $pns
     * @return \Illuminate\Http\Response
     */
    public function show(Pns $pns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pns  $pns
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'pnsedit';
        $pageTitle = 'PNS Edit';
        $tahun = Tahun::get();
        $data = Pns::FindOrFail($id);
        return view('bidang_politik.pns-edit', compact('active', 'pageTitle', 'tahun', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pns  $pns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pns::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('pns.index')->with('message', 'berhasil ubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pns  $pns
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pns::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Berhasil Hapus Data');
    }
}
