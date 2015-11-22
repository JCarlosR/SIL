<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{

    protected $table = 'Cargos';

    public $timestamps = false;

    protected $fillable = ['MOF_id','unidad','nombre','funcion'];

    public function postulaciones()
    {
        return $this->hasMany('App\UsuarioPostulacion','postulacion_id');
    }
    public function contrataciones()
    {
        return $this->hasMany('App\Contratar_Requisito','contratar_requisito_id');
    }
    public function funciones()
    {
        return $this->hasMany('App\Funcion','funcion_id');
    }
}
