<?php

namespace App\Http\Controllers;

use App\Peserta;
use App\Kelas;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $peserta = Peserta::all();
      return view('peserta', ['peserta' => $peserta]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('inputpeserta', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        Peserta::create($request->all());
        return redirect('/peserta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = Peserta::find($id);
        return view('peserta_edit', ['peserta' => $peserta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $peserta = Peserta::find($id);
        $peserta->nama_peserta = $request->nama_peserta;
        $peserta->tempat_lahir = $request->tempat_lahir;
        $peserta->tanggal_lahir = $request->tanggal_lahir;
        $peserta->alamat = $request->alamat;
        $peserta->email = $request->email;
        $peserta->save();
        return redirect('/peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $peserta = Peserta::find($id);
        $peserta->delete();
        return redirect('/peserta');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
 
    	// mengambil data dari table peserta sesuai pencarian data
		$peserta = Peserta::query()
        ->where('id_peserta', 'LIKE', "%{$cari}%") 
        ->orWhere('nama_peserta', 'LIKE', "%{$cari}%") 
        ->get();
 
    	// mengirim data ke view peserta
		return view('peserta',['peserta' => $peserta]);
    }
}
