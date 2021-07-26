<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Kelas;

class CetakController extends Controller
{
    public function index()
    {
        $peserta = Peserta::all();
        $kelas = Kelas::all();
        return view('cetak', compact('kelas','peserta'));
    }

    public function store(Request $request)
    {
        Cetak::create($request->all());
        return redirect('/cetak/view');

    }
    
}
