<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'location';

    // Primary key
    protected $primaryKey = ['id_location', 'id_depo'];

    // Primary key adalah composite key
    public $incrementing = false;

    // Tipe data untuk composite key
    protected $keyType = 'string';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id_location',
        'id_depo',
        'description'
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
            ->where('id_location', $this->getAttribute('id_location'))
            ->where('id_depo', $this->getAttribute('id_depo'));

        return $query;
    }
}
