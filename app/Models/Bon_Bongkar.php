<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bon_Bongkar extends Model
{
    use HasFactory;
    protected $table ='bon_bongkar';

    protected $primaryKey = 'id_bon_bongkar';


    protected $fillable = [
    'id_depo',
    'id_bar_code',
    'id_container',
    'id_consignee',
    'id_driver' ,
    'id_vehicle',
    'date_in' ,
    'id_paydate' ,
    'remak'    
];

protected $casts = [
    'Create_Date' => 'datetime',
    'Last_Update' => 'datetime',
  
];
}
