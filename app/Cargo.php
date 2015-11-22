<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{

    protected $fillable = [ 'MOF_id', 'unidad', 'nombre', 'funcion' ];

    public function MOF()
    {
        return $this->belongsTo('App\MOF');
    }

    // Un cargo tiene muchas:

    public function relaciones()
    {
        return $this->hasMany('App\Relacion');
    }

    public function atribuciones()
    {
        return $this->hasMany('App\Atribucion');
    }

    public function funciones()
    {
        return $this->hasMany('App\Funcion');
    }

    public function requisitos()
    {
        return $this->hasMany('App\Requisito');
    }

}
