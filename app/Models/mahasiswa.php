<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table='mahasiswa';
    protected $primaryKey = 'id_mahasiswa';

    public function absensi()
    {
        return $this->hasMany(absensi::class);
    }

    public function pembayaran(){
        return $this->hasMany(pembayaran::class);
    }

    public function domisili()
    {
        return $this->belongsTo(domisili::class);
    }

    public function course()
    {
        return $this->belongsTo(course::class);
    }
}
