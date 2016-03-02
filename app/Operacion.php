<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['proceso', 'operacion','transporte','inspeccion','demora','almacenaje','combinada'];

    public function proceso()
    {
        return $this->belongsTo('App\Proceso', 'id');
    }
}
