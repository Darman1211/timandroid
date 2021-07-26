<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Kelas;
use App\Cetak;

class CetakController extends Controller
{
    public function input()
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
    public function view()
    {
        $cetak = Cetak::all();
        return view('tabelcetak', ['cetak'=>$cetak]);

    }
    
}
