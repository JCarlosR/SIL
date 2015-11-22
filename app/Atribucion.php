<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atribucion extends Model
{
    protected $table = 'atribuciones';

    protected $fillable = [ 'cargo_id', 'descripcion' ];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

}
