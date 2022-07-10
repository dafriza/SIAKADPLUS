<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class domisili extends Model
{
    use HasFactory;
    protected $table='domisili';
    protected $primaryKey = 'id_domisili';

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class);
    }

    public function ibukota()
    {
        return $this->belongsTo(ibukota::class);
    }

    public function mahasiswa()
    {
        return $this->hasMany(mahasiswa::class);
    }
}
