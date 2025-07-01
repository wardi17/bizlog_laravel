<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif_EOR extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'tarif_EOR';

    // Primary key
    protected $primaryKey = ['id_tarif_EOR', 'id_depo'];

    // Primary key adalah composite key
    public $incrementing = false;

    // Tipe data untuk composite key
    protected $keyType = 'string';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id_tarif_EOR',
        'id_depo',
        'description',
        'resp',
        'id_location',
        'l',
        'w',
        'q',
        'curruncy',
        'hour',
        'labour',
        'material',
        'subtotal',
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
            ->where('id_tarif_EOR', $this->getAttribute('id_tarif_EOR'))
            ->where('id_depo', $this->getAttribute('id_depo'));

        return $query;
    }
}
