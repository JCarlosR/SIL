<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['protocolo_id','paciente_id'];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente', 'paciente_id');
    }

    public function pacienteexamenes(){
        return $this->hasMany('App\PacienteExamen', 'orden_id');
    }

    public function protocolo()
    {
        return $this->belongsTo('App\Protocolo', 'protocolo_id');
    }

    public function getMontoAttribute()
    {
        $perfil = $this->paciente->pacienteperfil_id;
        if ($perfil == 1)
            return 70;

        return 50;
    }
}
