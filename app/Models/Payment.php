<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';
    protected $primaryKey = 'payment_id';
    protected $fillable = ['shipment_id','id_depo','amount', 'payment_date', 'payment_method', 'status'];

    protected $casts = [
        'create_date' => 'datetime',
        'last_update' => 'datetime'
      
    ];
}