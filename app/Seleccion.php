<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seleccion extends Model
{

    protected $table = 'Selecciones';

    protected $fillable = ['user_id','postulante_id','mensaje','seleccionado'];

    public function usuarios()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function postulantes()
    {
        return $this->belonsgTo('App\Postulante','postulante_id');
    }
}
