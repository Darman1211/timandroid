<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    protected $table="cetak";
    protected $fillable = [
        'id_peserta','id_kelas','tgl_keluar_sertifikat',
    ];

    public function kelas()
    {
        return $this->hasMany('App\Cetak'); 
    }
    public function peserta()
    {
        return $this->hasMany('App\Cetak'); 
    }
}