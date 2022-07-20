<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $fillable = ['kategori'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'update_at' => 'datetime'
    ];


}
