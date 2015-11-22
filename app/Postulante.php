<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    protected $table = 'Postulantes';

    public $timestamps = false;

    protected $fillable = ['full_name','dni','email','phone','address','cVitae'];

    public function selecciones()
    {
        return $this->hasMany('App\Seleccion','seleccion_id');
    }
    public function postulaciones()
    {
    return $this->hasMany('App\Postulacion','postulacion_id');
    }
    public function anexos()
    {
        return $this->hasMany('App\Anexo','anexo_id');
    }
}
