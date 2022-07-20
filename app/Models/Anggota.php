<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $fillable = ['no_anggota',
    'nama_anggota',
    'jeniskelamin',
    'alamat',
    'no_hp',
    'photo',
    'status_id'

    ];
    protected $casts = [
        'created_at' => 'datetime',
        'update_at' => 'datetime'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
