<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContratarRequisito extends Model
{
    protected $table = 'contratar_requisitos';

    protected $fillable = ['cargo_id','descripcion'];
}
