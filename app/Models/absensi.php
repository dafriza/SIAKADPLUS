<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;
    protected $table='absensi';
    protected $primaryKey = 'id_absensi';
    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class);
    }

    public function course()
    {
        return $this->belongsTo(course::class);
    }
}
