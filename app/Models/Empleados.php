<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $fillabel = ['url', '_token'];
    use HasFactory;

    protected $table = 'empleados';
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class)->withTimestamps();
    }

    
}
