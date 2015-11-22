<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MOF extends Model
{
    protected $table = 'MOF';

    protected $fillable = [ 'user_id', 'finalidad', 'alcance', 'organigrama' ];

    public function cargos()
    {
        return $this->hasMany('App\Cargo');
    }

}
