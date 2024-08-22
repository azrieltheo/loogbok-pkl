<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
    ];

    public function kegiatans()
    {
        return $this->hasMany(Kegiatans::class, 'siswa_pkl_id');
    }

    public function pembimbing_lapangans()
    {
        return $this->hasOne(PembimbingLapangans::class, 'user_id');
    }

    public function pembimbing_sekolahs()
    {
        return $this->hasOne(PembimbingSekolahs::class, 'user_id');
    }

    public function siswa_pkls()
    {
        return $this->hasOne(SiswaPkls::class, 'user_id');
    }
}
