<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class learn extends Model
{
    use HasFactory;
    protected $table='learn';
    protected $primaryKey = 'id_learn';

    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class);
    }
    public function course()
    {
        return $this->belongsTo(course::class);
    }
}
