<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveyor extends Model
{
    use HasFactory;

    protected $table = 'surveyor';
    protected $primaryKey = 'id_surveyor';

    protected $fillable = [
        'surveyor_name',
        'phone_number',
        'email',
        'address',
        'license_number',
        'specialty',
        'status'
    ];

    protected $casts = [
        'create_date' => 'datetime',
        'last_update' => 'datetime'
      
    ];
}