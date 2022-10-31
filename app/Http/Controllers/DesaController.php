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
        return view('desa.desa-index', compact('data', 'active'));
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
        $user = new User();
        $user->name = strtolower($request->nama_desa);
        $user->email = strtolower(str_replace(' ', '.', $request->nama_desa . "@gmail.com"));
        $user->password = bcrypt("desa123");
        $user->role = "desa";
        $user->remember_token = Str::random(60);
        $user->save();
        $request->request->add(['user_id' => $user->id]);
        Desa::create([
            'nama_desa' => ucfirst($request->nama_desa),
            'kepala_desa' => $request->kepala_desa,
            'user_id' => $request->user_id,
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
    public function edit(Desa $desa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desa $desa)
    {
        //
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
        if ($data->user != null) {
            $data->delete();
            $data->user->delete();
            return redirect()->back();
        } else {
            $data->delete();
            return redirect()->back();
        }
    }
}
