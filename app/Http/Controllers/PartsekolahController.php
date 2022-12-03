<?php

namespace App\Http\Controllers;

use App\Models\{Partsekolah,  Desa, Tahun};
use Illuminate\Http\Request;

class PartsekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = "partisipasisekolah";
        $pageTitle = "angka partisipasi sekolah";
        $tahun = Tahun::all();
        $desa = Desa::all();
        $data = Partsekolah::all();
        return view('bidang_pendidikan.partsekolah-index', compact('active', 'data', 'pageTitle', 'tahun', 'desa'));
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
        $data = Partsekolah::where('desa_id',$request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Partsekolah::create(
                    $request->all()
                );
                return redirect()->back();
            }
        }else{
            Partsekolah::create(
                $request->all()
            );
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partsekolah  $partsekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Partsekolah $partsekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partsekolah  $partsekolah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Partsekolah::FindOrFail($id);
        $active =  'partsekolahedit';
        $pageTitle =  'partsipisasi sekolah';
        $desa = Desa::all();
        $tahun = Tahun::all();
        return view('bidang_pendidikan.partsekolah-edit', compact('data', 'active', 'pageTitle', 'desa', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partsekolah  $partsekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Partsekolah::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('partsekolah.index')->with('message', 'berhasil ubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partsekolah  $partsekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Partsekolah::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'berhasil hapus data');
    }
}
