<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table='pembayaran';
    protected $primaryKey = 'id_pembayaran';

    public function mahasiswa()
    {
        return $this->belongsToMany(mahasiswa::class);
    }

    public function course()
    {
        return $this->belongsTo(course::class);
    }
}
