<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rit extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['objeto','alcance'];

    public function rit()
    {
        return $this->hasMany('App\Titulo', 'rit_id');
    }


}
