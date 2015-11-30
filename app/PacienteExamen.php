<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacienteExamen extends Model
{
    protected $table = 'pacienteExamenes';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['orden_id','examen_id'];

    public function orden()
    {
        return $this->belongsTo('App\Orden', 'orden_id');
    }

    public function examen()
    {
        return $this->belongsTo('App\Examen', 'examen_id');
    }

}
