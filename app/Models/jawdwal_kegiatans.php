<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKegiatans extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'deskripsi',
        'gelombang_angkatan_id',
    ];

    public function gelombang_angkatan()
    {
        return $this->belongsTo(GelombangAngkatans::class, 'gelombang_angkatan_id');
    }

    public function kegiatans()
    {
        return $this->hasMany(Kegiatans::class, 'jadwal_kegiatan_id');
    }
}
