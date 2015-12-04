<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psicologia extends Model
{
    protected $table = 'psicologia';

    public $timestamps = false;

    protected $fillable = [ 'estado',
                            'historialClinico_id',
                            'hojaruta_id',
                            'protocolo_id',
                            'detalleorden_id'];

}