<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['capitulo_id','descripcion'];

    public function capitulo()
    {
        return $this->belongsTo('App\Capitulo', 'capitulo_id');
    }

    public function items()
    {
        return $this->hasMany('App\Item', 'articulo_id');
    }

}
