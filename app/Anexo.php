<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    protected $table = 'AnexoPostulantes';

    public $timestamps = false;

    protected $fillable = ['postulante_id','anexo'];

    public function postulantes()
    {
        return $this->belongsTo('App\Postulante','postulante_id');
    }
}
