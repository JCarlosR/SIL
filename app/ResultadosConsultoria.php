<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoLaboratorio extends Model
{
    protected $table = 'ResultadosLaboratorio';

    public $timestamps = false;

    protected $fillable = ['temaConsultoria',
                            'fechaRegistro',
                            'descripcion',
                            'estado',
                            'resultado',
                            'historialClinico_id',
                            'hojaruta_id',
                            'protocolo_id',
                            'detalleorden_id'];

}