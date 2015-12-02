<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['articulo_id','descripcion'];

    public function capitulo()
    {
        return $this->belongsTo('App\Articulo', 'articulo_id');
    }

}
