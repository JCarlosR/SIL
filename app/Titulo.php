<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['rit_id','nombre'];

    public function rit()
    {
        return $this->belongsTo('App\Rit', 'rit_id');
    }

    public function capitulos()
    {
        return $this->hasMany('App\Capitulo', 'titulo_id');
    }
}
