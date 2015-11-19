<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'Pacientes';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['nombre','dni','pacienteperfil_id'];


}
