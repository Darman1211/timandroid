<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
setlocale(LC_TIME, 'id_ID');
\Carbon\Carbon::setLocale('id');

class Peserta extends Model
{
    protected $table = "pesertas";
    protected $fillable = [
        'nama_peserta','tempat_lahir','tanggal_lahir','alamat','email',
    ];
    
    public function getTanggalLahirAttribute($value)
    {
        return Carbon::parse($this->attributes['tanggal_lahir'])
        ->translatedFormat('d F Y');
    }

    
}