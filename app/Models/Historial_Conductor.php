<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial_Conductor extends Model
{
    use HasFactory;
    protected $table = 'historial_conductor';
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class)->withTimestamps();
    }
}
