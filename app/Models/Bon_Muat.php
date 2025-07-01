<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bon_Muat extends Model
{
    use HasFactory;
    protected $table ='bon_muat';

    protected $primaryKey = 'id_bon_muat';


    protected $fillable = [
    'id_depo'       ,  
    'do_no'         ,
    'container_no'  ,
    'customer'   ,
    'email'         ,
    'destination'    ,
    'trucker_name'  ,
    'vehicle_no'    ,
    'vessel_voy' ,
    'party',
    'driver' ,
    'remarks',
    'commodity' ,
    'email_pic'  ,
    'print_status' 
    
];

protected $casts = [
    'Create_Date' => 'datetime',
    'Last_Update' => 'datetime',
];

}
