<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'Empresas';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['nombre_comercial','ruc','web','contacto1','contacto2'];


}
