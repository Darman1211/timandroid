<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Kelas;
use App\Cetak;
use Carbon\Carbon;


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
        // Cetak::create($request->all());

        // dd($request);

        $kk=Kelas::where('id',$request->id_kelas)->first();
        $id=Cetak::orderBy('id_cetak','desc')->first();
        $cetak= new Cetak();
        $cetak->no_sertifikat= "BG.".$kk->kd_kelas.".".date("Y").".".date("m").".".$id->id_cetak;
        $cetak->id_peserta=$request->id_peserta;
        $cetak->id_kelas=$request->id_kelas;
        $cetak->tgl_keluar_sertifikat=$request->tgl_keluar_sertifikat;
        $cetak->save();
        return redirect('/cetak/view');

    }
    public function view()
    {
        $cetak = Cetak::join('pesertas', 'pesertas.id', '=', 'cetaks.id_peserta')
                        ->join('kelas', 'kelas.id', '=', 'cetaks.id_kelas')
                        ->get();
        // dd($cetak);
        return view('tabelcetak', ['cetak'=>$cetak]);

    }
    public function sertifikat($id)
    {
        $cetak = Cetak::join('pesertas', 'pesertas.id', '=', 'cetaks.id_peserta')
                        ->join('kelas', 'kelas.id', '=', 'cetaks.id_kelas')
                        ->where('cetaks.id_cetak',$id)
                        ->first();
                       
        return view('sertifikat', ['cetak'=>$cetak]);
    }

    public function hapus($id)
    {
        $cetak = Cetak::find($id);
        $cetak->delete();
        return redirect('/tabelcetak');
    }
    
}
