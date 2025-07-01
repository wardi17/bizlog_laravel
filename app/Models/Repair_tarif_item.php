<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair_tarif_item extends Model
{
    use HasFactory;

    protected $table ='repair_tarif_item';

    protected $primaryKey = 'id_task_code';

    protected $fillable =[
       'id_task_code',
       'id_depo',
       'id_pelayaran',
       'groups',
       'id_component',
       'repair_type',
       'location',
       'lengths',
       'width',
       'qty',
       'unit',
       'description',
       'lab_hour',
       'mat_cost',
       'third_party_mat_cost',
       'lab_rate_flag',


    ];
 public $timestamps = false;

        protected $casts = [
        'registration_date' => 'date'

    ];
}
