<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenEspecial extends Model
{
    protected $table = 'examenesespeciales';

    public $timestamps = false;

    protected $fillable = [ 'tipoExamen',
                            'estado',
                            'historialClinico_id',
                            'hojaruta_id',
                            'protocolo_id',
                            'detalleorden_id'];

}