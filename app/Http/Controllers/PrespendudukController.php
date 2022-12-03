<?php

namespace App\Http\Controllers;

use App\Models\{Prespenduduk, Desa, Tahun};
use Illuminate\Http\Request;

class PrespendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'prespenduduk';
        $pageTitle = 'Jum Penduduk';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Prespenduduk::orderBy('tahun_id', 'DESC')->get();
        return view('ipg.jumpenduduk-index', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
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
        $data = Prespenduduk::where('desa_id',$request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Prespenduduk::create(
                    $request->all()
                );
                return redirect()->back();
            }
        }else{
            Prespenduduk::create(
                $request->all()
            );
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prespenduduk  $prespenduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Prespenduduk $prespenduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prespenduduk  $prespenduduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'prespenduduk_edit';
        $pageTitle = 'Jumlah Penduduk menurut Jenis Kelamin';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Prespenduduk::FindOrFail($id);
        return view('ipg.jumpenduduk-edit', compact('data', 'desa', 'tahun', 'active', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prespenduduk  $prespenduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

        ]);

        $data = Prespenduduk::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('prespenduduk.index')->with('message', 'berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prespenduduk  $prespenduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Prespenduduk::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'berhasil hapus data');
    }
}
