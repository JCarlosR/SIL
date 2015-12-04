<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['titulo_id','romano','descripcion'];

    public function titulo()
    {
        return $this->belongsTo('App\Titulo', 'titulo_id');
    }

    public function articulos()
    {
        return $this->hasMany('App\Articulo', 'capitulo_id');
    }
}
