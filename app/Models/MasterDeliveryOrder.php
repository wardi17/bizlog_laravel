<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDeliveryOrder extends Model
{
    use HasFactory;

    protected $table ='master_delivery_orders';

    protected $primaryKey = 'id_master_derivery';


    protected $fillable = [
        'id_depo',
        'order_number',
        'Do_Date', 
        'number_voyage',
        'port_of_loading',
        'departure_date',
        'port_of_discharge',
        'estimated_time_of_arrival',
        'call_sign',
        'number_registation',
        'place_of_delivery',
        'estimated_cargo_arrival_date',
        'number_barcode'
    ];


    protected $casts = [   
        'estimated_time_of_arrival' => 'date',  
        'delivery_date' => 'date',  
        'Do_Date'=>'date',
        'departure_date'=>'date',
        'Create_Date' => 'datetime',
        'Last_Update' => 'datetime'

    ];
}
