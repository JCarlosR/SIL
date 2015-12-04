<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoRadiologia extends Model
{
    protected $table = 'resultadoradiologia';

    public $timestamps = false;

    protected $fillable = [ 'fechaRegistro',
                            'estado',
                            'tipoRadiologia',
                            'descripcion',
                            'resultadoDescriptivo',
                            'codFolder',
                            'nombreImagen',
                            'historialClinico_id',
                            'hojaruta_id',
                            'protocolo_id',
                            'detalleorden_id'];

}