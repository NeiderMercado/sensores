<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;
    protected $table = 'conductor';
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class)->withTimestamps();
    }
}
