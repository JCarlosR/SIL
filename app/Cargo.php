<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{

    protected $fillable = [ 'MOF_id', 'unidad', 'nombre', 'funcion' ];

    // Ramos:

    public function MOF()
    {
        return $this->belongsTo('App\MOF');
    }


    // Un cargo tiene muchas:

    public function relaciones()
    {
        return $this->hasMany('App\Relacion');
    }

    public function getRelacionesInternasAttribute()
    {
        return $this->relaciones->where('tipo', 'interna');
    }

    public function getRelacionesExternasAttribute()
    {
        return $this->relaciones->where('tipo', 'externa');
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


    // Soles:

    public function postulaciones()
    {
        return $this->hasMany('App\Postulacion','postulacion_id');
    }

    public function contrataciones()
    {
        return $this->hasMany('App\Contratar_Requisito','contratar_requisito_id');
    }

    public function solicitado()
    {
        return $this->belongsTo('App\Solicitado','solicitado_id');
    }

}
