<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatans extends Model
{
    use HasFactory;

    protected $fillable = [
        'laporan',
        'tanggal_pengumpulan',
        'siswa_pkl_id',
        'jadwal_kegiatan_id',
    ];

    public function siswa_pkl()
    {
        return $this->belongsTo(User::class, 'siswa_pkl_id');
    }

    public function jadwal_kegiatan()
    {
        return $this->belongsTo(JadwalKegiatans::class, 'jadwal_kegiatan_id');
    }
}
