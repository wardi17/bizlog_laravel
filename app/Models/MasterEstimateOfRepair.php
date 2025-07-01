<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterEstimateOfRepair extends Model
{
    use HasFactory;

    protected $table ='master_estimate_of_repair';
    protected $primaryKey= 'id_estimate_of_repair';


       protected $fillable =[
        'id_depo',
        'eor_no',
        'container_no',
        'bl_no',
        'consignee',
        'eor_date',
        'principal',
        'valuta',
        'vessel_voyage',
        'date_in'
       ];

       public $timestamps = false;

    protected $casts = [
                 'Create_Date' => 'datetime',
                 'Last_Update' => 'datetime'
        ];
}
