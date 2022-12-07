<?php

namespace App\Http\Controllers;

use App\Models\{Prespendidikan, Tahun, Desa};
use Illuminate\Http\Request;

class PrespendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'prespendidikanterakhir';
        $pageTitle = 'Presentase Pendidikan Terakhir';
        $data = Prespendidikan::all();
        $tahun = Tahun::get();
        $desa = Desa::get();
        return view('ipg.prespendidikan-index', compact('active', 'pageTitle', 'data', 'desa', 'tahun'));
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
        $data = Prespendidikan::where('desa_id',$request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Prespendidikan::create(
                    $request->all()
                );
                return redirect()->back();
            }
        }else{
            Prespendidikan::create(
                $request->all()
            );
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prespendidikan  $prespendidikan
     * @return \Illuminate\Http\Response
     */
    public function show(Prespendidikan $prespendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prespendidikan  $prespendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'prespendidikanterakhiredit';
        $pageTitle = 'Presentase Pendidikan Terakhir Edit';
        $data = Prespendidikan::FindOrFail($id);
        $tahun = Tahun::get();
        $desa = Desa::get();
        return view('ipg.prespendidikan-edit', compact('active', 'pageTitle', 'data', 'desa', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prespendidikan  $prespendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = Prespendidikan::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('prespendidikan.index')->with('message', 'berhasil ubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prespendidikan  $prespendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Prespendidikan::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'data berhasil dihapus');
    }
}