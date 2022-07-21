<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table='course';
    protected $primaryKey = 'id_course';

    public function mahasiswa()
    {
        return $this->belongsToMany(mahasiswa::class);
    }

    public function absensi()
    {
        return $this->hasMany(absensi::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(pembayaran::class);
    }
    public function learn()
    {
        return $this->hasMany(learn::class);
    }
}
