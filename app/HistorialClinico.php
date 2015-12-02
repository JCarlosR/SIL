<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialClinico extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['fecha_creacion','fecha_modificacion'];


}
