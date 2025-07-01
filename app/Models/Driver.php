<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = 'driver';

    protected $primaryKey = 'id_driver';

    protected $fillable = [
        'id_driver',
        'Driver_name',
        'id_pelayaran',
        'phone_number',
    ];

    // Atur timestamps jika tidak menggunakan 'created_at' dan 'updated_at'
    public $timestamps = false;

    // Jika menggunakan timestamps custom

}
