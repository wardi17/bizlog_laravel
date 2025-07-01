<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif_lolo extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'tarif_lolo';

    // Primary key
    protected $primaryKey = ['id_tarif_lolo', 'id_depo'];

    // Primary key adalah composite key
    public $incrementing = false;

    // Tipe data untuk composite key
    protected $keyType = 'string';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id_tarif_lolo',
        'id_depo',
        'lolo_tipe',
        'valuta',
        'whosing_diterze',
        'whosing_chemical',
        'whosing_water',
        'administration',
        'Create_By',
        'Create_Date',
        'Update_By',
        'Last_Update',
    ];

    // Timestamps custom
    const CREATED_AT = 'Create_Date';
    const UPDATED_AT = 'Last_Update';

    // Disable default timestamps
    public $timestamps = false;

    /**
     * Override untuk mendukung composite key.
     */
    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('id_tarif_lolo', $this->getAttribute('id_tarif_lolo'))
            ->where('id_depo', $this->getAttribute('id_depo'));

        return $query;
    }
}
