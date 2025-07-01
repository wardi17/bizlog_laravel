<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate_of_repairdetail extends Model
{
    use HasFactory;

    protected $table = 'estimate_of_repair_detail';

    protected $primaryKey = 'id_estimate_of_repair_detail';

    protected $fillable = [
        'id_master_estimate_of_repair',              
        'no',                            
        'description',                     
        'resp',                     
        'loc',                                
        'l',                               
        'w',                            
        'q',                               
        'curr',                               
        'hour',                           
        'labour',  
        'material',
        'subtotal',                        
    ];

    protected $casts = [
        'create_date' => 'datetime',
        'last_update' => 'datetime',
        'latitude' => 'float',
        'longitude' => 'float'
    ];

}