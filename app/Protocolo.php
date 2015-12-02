<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocolo extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['empresa_id','observacion'];


    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'empresa_id');
    }

}
