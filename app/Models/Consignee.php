<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignee extends Model
{
    use HasFactory;
    protected $table ='consignee';

    protected $primaryKey = 'id_consignee';

    protected $fillable =[
       'id_depo',
       'consignee_name',
       'address'
    ];
 public $timestamps = false;

        protected $casts = [
        'Create_Date' => 'datetime',
        'Last_Update' => 'datetime'

    ];
}