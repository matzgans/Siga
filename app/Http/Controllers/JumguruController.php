<?php

namespace App\Http\Controllers;

use App\Models\{Jumguru, Tahun};
use Illuminate\Http\Request;

class JumguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'jumguru';
        $pageTitle = 'Jumlah Guru';
        $data = Jumguru::all();
        $tahun = Tahun::get();
        return view('bidang_pendidikan.jumguru-index', compact('active', 'pageTitle', 'data', 'tahun'));
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
        $data = Jumguru::where('tahun_id',$request->tahun_id)->first();
        if($data != null){
            return redirect()->back()->with('message', 'Data dengan tahun yang sama telah adaa');
        }else{
            Jumguru::create([
                'l'=>$request->l,
                'p'=>$request->p,
                'jum'=>$request->l + $request->p,
                'tahun_id'=>$request->tahun_id,
                'ket'=>$request->ket,
                'sumber'=>$request->sumber,
            ]);
            return redirect()->back()->with('message', 'berhasil tambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumguru  $jumguru
     * @return \Illuminate\Http\Response
     */
    public function show(Jumguru $jumguru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumguru  $jumguru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'editjumlahguru';
        $pageTitle = 'Edit Jumlah Guru';
        $data = Jumguru::FindOrFail($id);
        $tahun = Tahun::get();
        return view('bidang_pendidikan.jumguru-edit', compact('active', 'pageTitle', 'data', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumguru  $jumguru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Jumguru::FindOrFail($id);
        $data->update([
            'l'=>$request->l,
            'p'=>$request->p,
            'jum'=>$request->l + $request->p,
            'ket'=>$request->ket,
            'sumber'=>$request->sumber,
        ]);
        return redirect()->route('jumguru.index')->with('message', 'berhasil Ubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumguru  $jumguru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jumguru::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Berhasil Menghapus Data');
    }
}
