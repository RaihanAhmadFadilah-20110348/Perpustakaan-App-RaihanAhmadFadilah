<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XAccess extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'x_access';
    protected $fillable = [
        'group_id',
        'access',
        'created_at',
        'updated_at',
    ];
}
