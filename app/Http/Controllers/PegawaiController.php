<?php

namespace App\Http\Controllers;

use App\Models\{Pegawai, User};
use Illuminate\Support\Str;
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
        $data = Pegawai::all();
        $active = 'pegawai';
        $pageTitle = 'Pegawai';
        return view('pegawai.pegawai-index', compact('active', 'pageTitle', 'data'));
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
        $request->validate([
            'nama'=>['required'],
        ]);
        $user = new User();
        $user->name = $request->nama;
        $user->email = strtolower(str_replace(' ', '.', $request->nama.'@gmail.com'));
        $user->password = bcrypt("pegawai123");
        $user->role = 'pegawai';
        $user->remember_token = Str::random(60);
        $user->save();
        $request->request->add(['user_id'=> $user->id]);


        Pegawai::create([
            'user_id'=>$request->user_id,
            'nama'=>$request->nama,
        ]);

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
        $data->delete();
        return redirect()->back();        
    }
}
