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
        return $this->belongsTo('App\Empresa');
    }

    public function ordenes()
    {
        return $this->hasMany('App\Orden');
    }

    // Custom attributes
    public function getFechaAttribute()
    {
        return $this->created_at->format('d-m-y h:i');
    }

    public function getMontoAttribute()
    {
        $ordenes = $this->ordenes;
        $monto = 0;
        foreach ($ordenes as $orden) {
            $monto += $orden->monto;
        }

        return $monto;
    }
}
