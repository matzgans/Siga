<?php

namespace App\Http\Controllers;

use App\Models\{Opd, User};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Opd::all();
        $active = 'opd';
        $pageTitle = 'OPD';
        return view('opd.opd-index', compact('data', 'active', 'pageTitle'));
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
            'nama_istansi'=>['required','unique:opds'],
            'kepala_istansi'=>['required','unique:opds'],

        ]);
        Opd::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function show(Opd $opd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function edit(Opd $opd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opd $opd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Opd::FindOrFail($id);
        if ($data->user != null) {
            $data->delete();
            $data->user->delete();
        } else {
            $data->delete();
        }
        return redirect()->back();
    }
}
