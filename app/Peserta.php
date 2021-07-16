<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = [
        'no_peserta', 'nama_peserta', 'kd_kelas', 'nama_kelas', 'ttl', 'alamat', 'email',
    ];
}
