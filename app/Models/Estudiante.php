<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    public function carrera()
    {
        return $this->belongsTo('App\Models\Carrera', 'idcarrera');
    }
}
