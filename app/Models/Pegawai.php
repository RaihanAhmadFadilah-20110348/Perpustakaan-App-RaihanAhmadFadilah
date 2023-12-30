<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pegawai',
        'no_telp',
        'email',
        'nik',
        'tgl_lahir',
        'alamat'
    ];

    protected $hidden = [];
}
