<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
setlocale(LC_TIME, 'id_ID');
\Carbon\Carbon::setLocale('id');

class Cetak extends Model
{
    protected $table="cetaks";
    protected $fillable = [
        'no_sertifikat','id_peserta','id_kelas','tgl_keluar_sertifikat',
    ];

    // public function setNoSertifikatAttribute($value)
    // { 
    //   $this->attributes['no_sertifikat'] = "BG.".$kd_kelas.".".date("Y").".".date("m");
    // }
    public function getTglKeluarSertifikatAttribute($value)
    {
        return Carbon::parse($this->attributes['tgl_keluar_sertifikat'])
        ->translatedFormat('d F Y');
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