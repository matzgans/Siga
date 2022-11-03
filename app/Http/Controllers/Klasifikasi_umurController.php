<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klasifikasi_umur;

class Klasifikasi_umurController extends Controller
{
    public function index()
    {
        $active = 'klasifikasi_umur';
        $pageTitle = 'Klasifikasi Umur';
        $data = Klasifikasi_umur::all();
        return view('klasifikasi_umur.klasifikasi-index', compact('active', 'pageTitle', 'data'));
    }

    public function store(Request $request)
    {
        Klasifikasi_umur::create([
            'umur'=>$request->umur,
            'kategori'=>ucwords($request->kategori)
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = Klasifikasi_umur::FindOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
