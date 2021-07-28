<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    protected $table="cetaks";
    protected $fillable = [
        'no_sertifikat','id_peserta','id_kelas','tgl_keluar_sertifikat',
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Kelas'); 
    }
    public function peserta()
    {
        return $this->belongsTo('App\Peserta'); 
    }
}