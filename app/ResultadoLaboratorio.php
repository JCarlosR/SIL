<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoLaboratorio extends Model
{
    protected $table = 'resultadoslaboratorio';

    public $timestamps = false;

    protected $fillable = ['tipoAnalisis',
                            'fechaRegistro',
                            'descripcion',
                            'estado',
                            'resultado',
                            'historialClinico_id',
                            'hojaruta_id',
                            'protocolo_id',
                            'detalleorden_id'];

}