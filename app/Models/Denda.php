<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
    use HasFactory;

    protected $table = 'denda';
    protected $fillable = ['nama',
    'jumlah_denda',
    'keterangan'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'update_at' => 'datetime'
    ];
}
