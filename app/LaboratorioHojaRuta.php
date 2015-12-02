<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaboratorioHojaRuta extends Model
{
    protected $table = 'resultadoslaboratorio';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['tipoAnalisis','descripcion','estado','hojaruta_id'];
}
