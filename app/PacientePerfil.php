<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacientePerfil extends Model
{
    protected $table = 'PacientePerfiles';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['descripcion'];


}
