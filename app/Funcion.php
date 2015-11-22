<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    protected $table = 'funciones';

    protected $fillable = [ 'cargo_id', 'descripcion' ];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

}
