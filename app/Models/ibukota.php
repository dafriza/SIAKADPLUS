<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ibukota extends Model
{
    use HasFactory;
    protected $table='ibukota';
    protected $primaryKey = 'id_ibukota';

    public function domisili()
    {
        return $this->hasOne(domisili::class);
    }
}
