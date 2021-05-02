<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interno extends Model
{
    use HasFactory;
    protected $fillable = ['path'];
    public function getUrlPathAttribute()
    {
        return \Storage::url($this->path);
    }
}
