<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'peminjaman';


    protected $fillable = [
        'id_anggota',
        'id_buku',
        'tgl_pinjam',
        'id_pengguna',
        'id_denda',
        'tgl_kembali',
        'lama_terlambat',
        'total_denda',
        'status'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'update_at' => 'date'
    ];
}
