<?php

namespace App\Http\Controllers;

use App\Models\{Jumkekerasan, Tahun, Desa, Jumguru};
use Illuminate\Http\Request;

class JumkekerasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'jumkekerasan';
        $pageTitle = 'Jumlah kekerasan terhadap perempuan dan anak';
        $data = Jumkekerasan::get();
        $tahun = Tahun::get();
        $desa = Desa::get();
        return view('kekerasan.jumkekerasan-index', compact('active', 'pageTitle', 'data', 'tahun', 'desa'));
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
        $data = Jumkekerasan::where('desa_id', $request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                return redirect()->back()->with('message', 'Desa Dengan Tahun Yang sama telah ada');
            }else{
                Jumkekerasan::create([
                    'desa_id'=>$request->desa_id,
                    'l'=>$request->l,
                    'p'=>$request->p,
                    'tahun_id'=>$request->tahun_id,
                    'sumber'=>$request->sumber,
                    'ket'=>$request->ket,
                ]);
                return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
            }
        }else{
            Jumkekerasan::create([
                'desa_id'=>$request->desa_id,
                'l'=>$request->l,
                'p'=>$request->p,
                'tahun_id'=>$request->tahun_id,
                'sumber'=>$request->sumber,
                'ket'=>$request->ket,
            ]);
            return redirect()->back()->with('message', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumkekerasan  $jumkekerasan
     * @return \Illuminate\Http\Response
     */
    public function show(Jumkekerasan $jumkekerasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumkekerasan  $jumkekerasan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'jumkekerasanedit';
        $pageTitle = 'Edit Jumlah kekerasan terhadap perempuan dan anak';
        $desa = Desa::get();
        $tahun = Tahun::get();
        $data = Jumkekerasan::FindOrFail($id);
        return view('kekerasan.jumkekerasan-edit', compact('active', 'pageTitle', 'desa', 'tahun', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumkekerasan  $jumkekerasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = Jumkekerasan::FindOrFail($id);
        $data->update($request->all());
        return redirect()->route('jumkekerasan.index')->with('message', 'Berhasil Ubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumkekerasan  $jumkekerasan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jumkekerasan::FindOrFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'Berhasil Hapus Data');
    }
}
