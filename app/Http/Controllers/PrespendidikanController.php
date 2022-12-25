<?php

namespace App\Http\Controllers;

use App\Models\{Prespendidikan, Tahun, Desa};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PrespendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'prespendidikan';
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
                Alert::error('Gagal', 'Data desa dengan tahun yang sama telah ada');
                return redirect()->back();
            }else{
                Prespendidikan::create(
                    $request->all()
                );
                Alert::success('Berhasil', 'Data Telah Ditambahkan');
                return redirect()->back();
            }
        }else{
            Prespendidikan::create(
                $request->all()
            );
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
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
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('prespendidikan.index');
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
        return redirect()->back();
    }
}
