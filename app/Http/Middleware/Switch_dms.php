<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Switch_dms extends Model
{
    use HasFactory;
    protected $table ='switch_dms';

    protected $primaryKey = 'id_switch_dms';


    protected $fillable = [
    'id_switch_dms',
    'container_no',
    'bl_no',
    'date_in',
    'survey_status',
    'codeco_status',

];

    // Atur timestamps jika tidak menggunakan 'created_at' dan 'updated_at'
    public $timestamps = false;

    // Jika menggunakan timestamps custom
    const CREATED_AT = 'Create_Date';
    const UPDATED_AT = 'Last_Update';
}
