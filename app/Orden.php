<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['protocolo_id','paciente_id'];

}
