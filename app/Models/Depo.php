<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depo extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'depo';

    // Primary key tabel
    protected $primaryKey = 'id_depo';

    // Kolom-kolom yang bisa diisi (mass-assignable)
    protected $fillable = [
        'nama_depo',
        'kapasitas',
        'google_map_link',
        'latitude',
        'longitude',
        'create_by',
        'create_date',
        'update_by',
        'last_update'
    ];

    // Tipe data yang dikonversi otomatis oleh Laravel
    protected $casts = [
        'create_date' => 'datetime',
        'last_update' => 'datetime',
        'latitude' => 'float',
        'longitude' => 'float'
    ];
}
