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

    public function getOrganigramaEsImagenAttribute()
    {
        if ($this->organigrama) {
            $supported_image = [
                'gif',
                'jpg',
                'jpeg',
                'png'
            ];

            $ext = strtolower(pathinfo($this->organigrama, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_image))
                return true;
        }
        return false;
    }

}
