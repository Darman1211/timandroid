<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
setlocale(LC_TIME, 'id_ID');
\Carbon\Carbon::setLocale('id');

class Kelas extends Model
{
    protected $table="kelas";
    protected $fillable = [
        'kd_kelas','nama_kelas','tgl_mulai','tgl_selesai','total_jam',
    ];

    public function getTglMulaiAttribute($value)
    {
        return Carbon::parse($this->attributes['tgl_mulai'])
        ->translatedFormat('d F Y');
    }
    public function getTglSelesaiAttribute($value)
    {
        return Carbon::parse($this->attributes['tgl_selesai'])
        ->translatedFormat('d F Y');
    }
}
