<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EirIn extends Model
{
    use HasFactory;



    protected $table ='eir_in';

    protected $primaryKey = 'id_eir_in';


    protected $fillable = [
    'id_depo',
    'bill_of_lading_number',
    'customer',
    'vesselvoy',
    'ctr_no',
    'date_in',
    'vehicle_no',
    'block_adv',
    'remarks'

    ];

   

protected $casts = [
    'date_in' => 'date',
    'Create_Date' => 'datetime',
    'Last_Update' => 'datetime',
];

}

