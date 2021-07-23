<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table="kelas";
    protected $fillable = [
        'nama_kelas','tgl_mulai','tgl_selesai','total_jam',
    ];
}
