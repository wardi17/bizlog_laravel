<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depo extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'container';

    // Primary key tabel
    protected $primaryKey = 'id_container';

    // Kolom-kolom yang bisa diisi (mass-assignable)
    protected $fillable = [
       'shipment_id', 'container_number', 'container_type', 'container_status'
    ];

    // Tipe data yang dikonversi otomatis oleh Laravel
    protected $casts = [
        'create_date' => 'datetime',
        'last_update' => 'datetime',
       
    ];
}
