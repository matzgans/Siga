<?php

namespace App\Http\Controllers;

use App\Models\{Pegawai, Klasifikasi_umur, Agama, Tahun, Jabatan};
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pegawai::orderBy('nama', 'DESC')->get();
        $active = 'pegawai';
        $pageTitle = 'pegawai';
        $klasifikasi = Klasifikasi_umur::all();
        $agama = Agama::all();
        $tahun = Tahun::all();
        $jabatan = Jabatan::all();

        $pegawai = Pegawai::join('opds', 'opds.id', '=', 'pegawais.opd_id')
                            ->select('pegawais.*')
                            ->where('opds.user_id', auth()->user()->id)
                            ->get();

        $pegawai_laki = Pegawai::join('opds', 'opds.id', '=', 'pegawais.opd_id')
                            ->select('pegawais.*')
                            ->where('opds.user_id', auth()->user()->id)
                            ->where('jk', 'l')
                            ->get();

        $pegawai_perempuan = Pegawai::join('opds', 'opds.id', '=', 'pegawais.opd_id')
                            ->select('pegawais.*')
                            ->where('opds.user_id', auth()->user()->id)
                            ->where('jk', 'p')
                            ->get();

        return view('pegawai.pegawai-index', compact('data','active','pageTitle', 
                    'klasifikasi', 'agama', 'tahun', 'jabatan', 'pegawai', 'pegawai_laki', 'pegawai_perempuan'));
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
        $data = Pegawai::create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jk'=>$request->jk,
            'klasifikasi_umur_id'=>$request->klasifikasi_umur_id,
            'umur'=>$request->umur,
            'agama_id'=>$request->agama_id,
            'jabatan_id'=>$request->jabatan_id,
            'tahun_id'=>$request->tahun_id,
            'opd_id'=>auth()->user()->opd->id,
            'alamat'=>$request->alamat,
            'foto'=>$request->foto,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto_pegawai/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'pegawaiedit';
        $pageTitle = 'Pegawaiedit';
        $data = Pegawai::FindOrFail($id);
        $klasifikasi = Klasifikasi_umur::all();
        $agama = Agama::all();
        $jabatan = Jabatan::all();
        $tahun = Tahun::all();
        return view('pegawai.pegawai-edit', compact('data', 'active', 'pageTitle',
         'klasifikasi', 'agama', 'jabatan', 'agama', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pegawai::FindOrFail($id);
        if($request->foto != null){
            if(file_exists(public_path() . '/foto_pegawai/' . $data->foto)){
               unlink(public_path() . '/foto_pegawai/' . $data->foto); 
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
                'jabatan_id'=>$request->jabatan_id,
                'tahun_id'=>$request->tahun_id,
                'opd_id'=>auth()->user()->opd->id,
                'alamat'=>$request->alamat,
                'foto'=>$request->foto,
            ]);
            if($request->hasFile('foto')){
                $request->file('foto')->move('foto_pegawai/',$request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('pegawai.index');

        }else{
            Pegawai::FindOrFail($id)->update([
                'nik'=>$request->nik,
                'nama'=>$request->nama,
                'tempat_lahir'=>$request->tempat_lahir,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'jk'=>$request->jk,
                'klasifikasi_umur_id'=>$request->klasifikasi_umur_id,
                'umur'=>$request->umur,
                'agama_id'=>$request->agama_id,
                'jabatan_id'=>$request->jabatan_id,
                'tahun_id'=>$request->tahun_id,
                'opd_id'=>auth()->user()->opd->id,
                'alamat'=>$request->alamat,
                'foto'=>$data->foto,
            ]);
            return redirect()->route('pegawai.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pegawai::FindOrFail($id);
        if(file_exists(public_path(). '/foto_pegawai/' . $data->foto)){
            unlink(public_path(). '/foto_pegawai/' . $data->foto);
            $data->delete();
        }else{
            $data->delete();
        }
        return redirect()->back();
    }
}
