<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{

    protected $table = 'Postulaciones';

    protected $fillable = ['postulante_id','cargo_id'];

    public function pustulantes()
    {
        return $this->belongsTo('App\Postulante','postulante_id');
    }
    public function cargos()
    {
        return $this->belongsTo('App\Cargo','cargo_id');
    }
}
