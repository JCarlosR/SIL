<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoConsultoria extends Model
{
    protected $table = 'resultadoconsutoria';

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