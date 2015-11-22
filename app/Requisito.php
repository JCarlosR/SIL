<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{

    protected $fillable = [ 'cargo_id', 'nombre', 'descripcion' ];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

}
