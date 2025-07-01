<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipping extends Model
{
    use HasFactory;


    protected $table ='shipping';
    protected $primaryKey = 'shipping_id';
    protected $fillable =[
    'prefix',
    'shipping_name',
    'email',
    'phone_number',
    'address',
    'city',
    'pos_code',
    'country',
    'status_active',
    'contact_personal',
    'registration_date',
    'update_by',
    'create_by',
    ];
 public $timestamps = false;

        protected $casts = [
        'create_by' => 'date',
         'last_update' => 'date'

    ];

}
