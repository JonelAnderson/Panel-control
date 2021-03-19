<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $table = 'facultads';
    public function carreras()
    {
        return $this->hasMany('App\Models\Carrera');
    }
}
