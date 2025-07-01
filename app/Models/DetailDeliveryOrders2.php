<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDeliveryOrders2 extends Model
{
    use HasFactory;
    protected $table ='detail_delivery_orders2';

    protected $primaryKey = 'id_detail_derivery2';


    protected $fillable = [
  'container_number',
  'seal_no',
  'size_type',
  'piece_count',
  'traffic_terms',
  'container_remarks'
  
];

  

protected $casts = [
    'Create_Date' => 'datetime',
    'Last_Update' => 'datetime',
];

}
