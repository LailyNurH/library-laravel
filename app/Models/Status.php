<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected  $table = 'status';
    protected $fillable = [
        'nama_status',
        'batas_buku',
        'batas_hari'
    ];

    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }
}
