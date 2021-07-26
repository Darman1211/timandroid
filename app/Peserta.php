<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = "peserta";
    protected $fillable = [
        'nama_peserta','tempat_lahir','tanggal_lahir','alamat','email',
    ];

    
}