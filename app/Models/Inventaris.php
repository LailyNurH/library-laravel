<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $table = 'inventaris';
    protected $fillable = ['id_buku',
    'status_buku',
    'tgl_masuk'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'update_at' => 'datetime'
    ];

    public function book()
    {
        return $this->belongsTo(Buku::class);
    }
}
