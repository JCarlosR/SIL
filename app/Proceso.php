<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['nombre','descripcion'];

    public function operacion()
    {
        return $this->hasMany('App\Operacion', proceso);
    }

}
