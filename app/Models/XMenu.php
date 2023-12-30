<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XMenu extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'x_menu';
    protected $fillable = [
        'id',
        'kode_menu',
        'nama_menu',
        'is_actived',
        'is_deleted',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}
