<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacienteExamen extends Model
{
    protected $table = 'PacienteExamenes';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['orden_id','examen_id'];

}
