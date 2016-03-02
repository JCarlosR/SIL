<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacientePerfil extends Model
{
    protected $table = 'pacientePerfiles';

    protected $fillable = ['descripcion'];

    // Relaciones

    public function pacientes()
    {
        return $this->hasMany('App\Paciente');
    }
}
