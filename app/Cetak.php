<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    protected $table="cetaks";
    protected $fillable = [
        'no_sertifikat','id_peserta','id_kelas','tgl_keluar_sertifikat',
    ];

    public function setNoSertifikatAttribute($value)
    { 
      $this->attributes['no_sertifikat'] = "BG.".$kd_kelas.".".date("Y").".".date("m");
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas'); 
    }
    public function peserta()
    {
        return $this->belongsTo('App\Peserta'); 
    }
}