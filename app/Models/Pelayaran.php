<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayaran extends Model
{
    use HasFactory;

    protected $table ='pelayaran';

    protected $primaryKey = 'pelayaran_id';

    protected $fillable =[
       'pelayaran_name',
       'email',
       'phone_number',
       'address',
       'city',
       'pos_code',
       'country',
       'status_active',
       'contact_personal',
       'registration_date'
    ];
 public $timestamps = false;

        protected $casts = [
        'registration_date' => 'date'

    ];
}
