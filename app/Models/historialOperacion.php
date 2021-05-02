<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historialOperacion extends Model
{
    use HasFactory;
    protected $table = 'historial_operacion';
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class)->withTimestamps();
    }
}
