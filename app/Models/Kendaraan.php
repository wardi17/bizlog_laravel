<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'id_kendaraan';

    protected $fillable = [
        'nomor_plat',
        'jenis_kendaraan',
        'waktu_masuk',
        'waktu_keluar',
        'biaya_parkir',
        'Create_By',
        'Update_By'
    ];

    protected $casts = [
        'waktu_masuk' => 'datetime',
        'waktu_keluar' => 'datetime',
        'Create_Date' => 'datetime',
        'Last_Update' => 'datetime',
    ];
}