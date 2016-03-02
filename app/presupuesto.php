<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['area', 'anual','presupuesto','real'];

}
