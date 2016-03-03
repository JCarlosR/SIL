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

    public function ordenes()
    {
        return $this->hasMany('App\Orden', 'orden_id');
    }

    // Custom attributes
    public function getFechaAttribute()
    {
        return $this->created_at->format('d-m-y h:i');
    }

}
