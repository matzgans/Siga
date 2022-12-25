<?php

namespace App\Http\Controllers;

use App\Models\{Jumkerlok, Tahun, Desa};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JumkerlokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'jumkerlok';
        $pageTitle = 'Jumlah kekerasan terhadap perempuan dan anak Menurut Pendidikan dan Lokasi';
        $data = Jumkerlok::get();
        $tahun = Tahun::get();
        $desa = Desa::get();
        return view('kekerasan.jumkerlok-index', compact('active', 'pageTitle', 'data', 'tahun', 'desa'));
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
        $data = Jumkerlok::where('desa_id',$request->desa_id)->first();
        if($data != null){
            if($data->tahun_id == $request->tahun_id){
                Alert::error('Gagal', 'Data dengan tahun yang sama telah ada');
                return redirect()->back();
            }else{
                Jumkerlok::create(
                    $request->all()
                );
                Alert::success('Berhasil', 'Data Telah Ditambahkan');
                return redirect()->back();
            }
        }else{
            Jumkerlok::create(
                $request->all()
            );
            Alert::success('Berhasil', 'Data Telah Ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumkerlok  $jumkerlok
     * @return \Illuminate\Http\Response
     */
    public function show(Jumkerlok $jumkerlok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumkerlok  $jumkerlok
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'jumkerlokedit';
        $pageTitle = 'Edit Jumlah kekerasan terhadap perempuan dan anak Menurut Pendidikan dan Lokasi';
        $data = Jumkerlok::FindOrFail($id);
        $tahun = Tahun::get();
        $desa = Desa::get();
        return view('kekerasan.jumkerlok-edit', compact('active', 'pageTitle', 'data', 'tahun', 'desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumkerlok  $jumkerlok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Jumkerlok::FindOrFail($id);
        $data->update($request->all());
        Alert::success('Berhasil', 'Data Telah Diubah');
        return redirect()->route('jumkerlok.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumkerlok  $jumkerlok
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jumkerlok::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
