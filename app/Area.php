<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['nombre','descripcion', 'responsable'];

}
