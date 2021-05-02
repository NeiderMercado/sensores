<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historialRTM extends Model
{
    use HasFactory;
    protected $table = 'historial_rtm';
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class)->withTimestamps();
    }
}
