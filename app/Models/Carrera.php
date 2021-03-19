<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';
    public function estudiantes()
    {
        return $this->hasMany('App\Models\Estudiante');
    }
    public function facultad()
    {
        return $this->belongsTo('App\Models\Facultad', 'idfacultad');
    }
}
