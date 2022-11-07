<?php

namespace App\Http\Controllers;

use App\Models\{Penduduk, Klasifikasi_umur, Desa, Agama, Pekerjaan, Tahun};
use Illuminate\Http\Request;
use PDF;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'penduduk';
        $pageTitle = 'Penduduk';
        $klasifikasi = Klasifikasi_umur::all();
        $agama = Agama::all();
        $pekerjaan = Pekerjaan::all();
        $tahun = Tahun::all();
        
        $penduduk = Penduduk::join('desas', 'desas.id','=','penduduks.desa_id')
                        ->select('penduduks.*')
                        ->where('desas.user_id',auth()->user()->id)->get();
        
        $penduduk_laki = Penduduk::join('desas', 'desas.id','=','penduduks.desa_id')
                        ->select('penduduks.*')
                        ->where('desas.user_id',auth()->user()->id)
                        ->where('jk','l')->get();

        $penduduk_perempuan = Penduduk::join('desas', 'desas.id','=','penduduks.desa_id')
                        ->select('penduduks.*')
                        ->where('desas.user_id',auth()->user()->id)
                        ->where('jk','p')->get();
                                
        // $data = Penduduk::where('desa_id', auth()->user()->desa->id);
        // $penduduk = $data->get();
        // $penduduk_laki = $data->where('jk','l')->orderBy('nama', 'asc')->get();
        // $penduduk_perempuan =  $data->where('jk','p')->orderBy('nama', 'asc')->get();
        
        return view('penduduk.penduduk-index',
        compact('active', 'pageTitle', 'klasifikasi' ,
         'agama', 'pekerjaan', 'tahun', 
         'penduduk_laki', 'penduduk_perempuan', 'penduduk'));
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
        $data = Penduduk::create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jk'=>$request->jk,
            'klasifikasi_umur_id'=>$request->klasifikasi_umur_id,
            'umur'=>$request->umur,
            'agama_id'=>$request->agama_id,
            'pekerjaan_id'=>$request->pekerjaan_id,
            'tahun_id'=>$request->tahun_id,
            'desa_id'=>auth()->user()->desa->id,
            'alamat'=>$request->alamat,
            'foto'=>$request->foto,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto_penduduk/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $active = 'show_penduduk';
        $pageTitle = 'Lihat Penduduk';
        $data = Penduduk::FindOrFail($id);
        return view('penduduk.penduduk-show',compact('active', 'pageTitle', '$data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'pendudukedit';
        $pageTitle = 'Pendudukedit';
        $data = Penduduk::FindOrFail($id);
        $klasifikasi = Klasifikasi_umur::all();
        $agama = Agama::all();
        $pekerjaan = Pekerjaan::all();
        $tahun = Tahun::all();
        return view('penduduk.penduduk-edit', compact('data', 'active', 'pageTitle',
         'klasifikasi', 'agama', 'pekerjaan', 'agama', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Penduduk::FindOrFail($id);
        if($request->foto != null){
            if (file_exists(public_path() . '/foto_penduduk/'.$data->foto)) {
                unlink(public_path() . '/foto_penduduk/'.$data->foto);
                
            }
            $data->update([
                'nik'=>$request->nik,
                'nama'=>$request->nama,
                'tempat_lahir'=>$request->tempat_lahir,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'jk'=>$request->jk,
                'klasifikasi_umur_id'=>$request->klasifikasi_umur_id,
                'umur'=>$request->umur,
                'agama_id'=>$request->agama_id,
                'pekerjaan_id'=>$request->pekerjaan_id,
                'tahun_id'=>$request->tahun_id,
                'desa_id'=>auth()->user()->desa->id,
                'alamat'=>$request->alamat,
                'foto'=>$request->foto,
            ]);
            if($request->hasFile('foto')){
                $request->file('foto')->move('foto_penduduk/',$request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('penduduk.index');
        }else{
            Penduduk::FindOrFail($id)->update([
                'nik'=>$request->nik,
                'nama'=>$request->nama,
                'tempat_lahir'=>$request->tempat_lahir,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'jk'=>$request->jk,
                'klasifikasi_umur_id'=>$request->klasifikasi_umur_id,
                'umur'=>$request->umur,
                'agama_id'=>$request->agama_id,
                'pekerjaan_id'=>$request->pekerjaan_id,
                'tahun_id'=>$request->tahun_id,
                'desa_id'=>auth()->user()->desa->id,
                'alamat'=>$request->alamat,
                'foto'=>$data->foto,
            ]);
            return redirect()->route('penduduk.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Penduduk::FindOrFail($id);
        if (file_exists(public_path() . '/foto_penduduk/'.$data->foto)) {
            unlink(public_path() . '/foto_penduduk/'.$data->foto);
            $data->delete();
        }else{
            $data->delete();
        }
        return redirect()->back();
    }

    public function pdf()
    {
        $perempuan = Penduduk::join('desas','desas.id','=','penduduks.desa_id')
                        ->select('penduduks.*','desas.id')
                        ->where('desas.user_id',auth()->user()->id)
                        ->where('jk','p')
                        ->get();


        $pdf = PDF::loadView('penduduk.penduduk-pdf', ['perempuan'=>$perempuan]);
        return $pdf->stream();
    }
}
