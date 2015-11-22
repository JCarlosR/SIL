<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacientePerfil extends Model
{
    protected $table = 'pacientePerfiles';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['descripcion'];


}
