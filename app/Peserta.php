<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = [
        'no_peserta', 'nama_peserta', 'nama_kelas', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'email',
    ];
}
