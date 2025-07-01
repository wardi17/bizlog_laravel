<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDeliveryOrders1 extends Model
{
    use HasFactory;

    protected $table ='detail_delivery_orders1';

    protected $primaryKey = 'id_detail_derivery1';


    protected $fillable = [
       'marks',
       'package',
       'description_of_goods',
       'weight',
       'measurement'
      
    ];

    
protected $casts = [
    'Create_Date' => 'datetime',
    'Last_Update' => 'datetime',
];

}


