<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{

    protected $fillable = [ 'email', 'descripcion', 'estado' ];

    // Custom attributes
    public function getFechaAttribute()
    {
        return $this->created_at->format('d-m-y h:i');
    }

}
