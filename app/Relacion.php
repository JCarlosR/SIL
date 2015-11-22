<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
    protected $table = 'relaciones';

    protected $fillable = [ 'cargo_id', 'tipo', 'descripcion' ];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

}
