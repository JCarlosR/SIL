<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{


    protected $fillable = ['nombre','dni','pacienteperfil_id', 'numhijos', 'estudios', 'sexo', 'gruposangre'];

    public function perfil()
    {
        return $this->belongsTo('App\PacientePerfil', 'pacienteperfil_id');
    }

    public function ordenes()
    {
        return $this->hasMany('App\Orden', 'paciente_id');
    }

}
