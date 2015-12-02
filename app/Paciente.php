<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['nombre','dni','pacienteperfil_id'];

    public function perfil()
    {
        return $this->belongsTo('App\PacientePerfil', 'pacienteperfil_id');
    }

}
