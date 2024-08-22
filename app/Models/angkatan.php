<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun_ajaran',
    ];

    public function gelombangAngkatans() 
    {
        return $this->hasMany(GelombangAngkatan::class); 
    }
}

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GelombangAngkatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'angkatan_id', 
        'tanggal_mulai',
        'tanggal_selesai',
        'kuota',
        'status',
        'keterangan',
    ];

    public function angkatan()
    {
        return $this->belongsTo(Angkatan::class);
    }
}

use App\Models\Angkatan;
use App\Models\GelombangAngkatan;

$angkatan = Angkatan::latest()->first(); 

$gelombangAngkatan = new GelombangAngkatan();
$gelombangAngkatan->nama = 'Gelombang 1';
$gelombangAngkatan->tanggal_mulai = '2023-09-01'; 
$gelombangAngkatan->tanggal_selesai = '2023-12-31';
$gelombangAngkatan->kuota = 50;
$gelombangAngkatan->status = 'dibuka';
$gelombangAngkatan->keterangan = 'Gelombang pertama tahun ajaran 2023/2024';
$gelombangAngkatan->angkatan()->associate($angkatan);
$gelombangAngkatan->save();
$angkatan->gelombangAngkatans()->create([
    'nama' => 'Gelombang 2', 
    'tanggal_mulai' => '2024-01-01',
    'tanggal_selesai' => '2024-03-31',
    'kuota' => 30,
    'status' => 'dibuka',
    'keterangan' => 'Gelombang kedua tahun ajaran 2023/2024',
]);

$gelombangAngkatans = $angkatan->gelombangAngkatans()->select('nama', 'id', 'tanggal_mulai', 'tanggal_selesai', 'kuota', 'status', 'keterangan')->get();

foreach ($gelombangAngkatans as $gelombang) {
    echo "Nama: " . $gelombang->nama . ", ID: " . $gelombang->id . "\n";
    echo "Tanggal Mulai: " . $gelombang->tanggal_mulai . ", Tanggal Selesai: " . $gelombang->tanggal_selesai . "\n";
    echo "Kuota: " . $gelombang->kuota . ", Status: " . $gelombang->status . "\n";
    echo "Keterangan: " . $gelombang->keterangan . "\n\n";
}
