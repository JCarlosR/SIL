<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['nombre_comercial','ruc','web','contacto1','contacto2'];

    public function protocolos()
    {
        return $this->hasMany('App\Protocolo');
    }
}
