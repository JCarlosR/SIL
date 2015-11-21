<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Triaje extends Model
{
    protected $fillable = [ 'paciente_id', 'hojaruta_id', 'protocolo_id', 'orden_id', 'historial_clinico_id','peso', 'talla', 'presion_arterial', 'frecuencia_cardiaca' ];

}
