<?php

namespace App\Http\Controllers;

use App\Models\{Desa, User};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Desa::all();
        $active = 'desa';
        $pageTitle = 'Desa';
        return view('desa.desa-index', compact('data', 'active', 'pageTitle'));
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
        Desa::create([
            'nama_desa' => ucfirst($request->nama_desa),
            'kepala_desa' => $request->kepala_desa,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show(Desa $desa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Desa::FindOrFail($id);
        $active = 'desa';
        $pageTitle = 'Edit Desa';
        return view('desa.desa-edit', compact('data', 'active', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_desa'=>['required'],
            'kepala_desa'=>['required'],
        ]);

        $data =  Desa::FindOrFail($id);
        $data->update($request->all());

        return redirect()->route('desa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Desa::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
