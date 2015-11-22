<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = 'examenes';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['nombre','pacienteperfil_id'];


}
