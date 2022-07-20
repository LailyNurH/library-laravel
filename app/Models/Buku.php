<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';


    protected $fillable = [
        'judul_buku',
        'id_pengarang',
        'id_kategori',
        'id_penerbit',
        'ISBN',
        'tahun_terbit',
        'bahasa',
        'stok',
        'foto'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'update_at' => 'datetime'
    ];

    public function inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }

    public function relation_pengarang()
    {
        return $this->belongsTo(Pengarang::class);
    }
    public function relation_penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }

    public function relation_kategori()
    {
        return $this->belongsTo(Kategori::class);
    }


}
