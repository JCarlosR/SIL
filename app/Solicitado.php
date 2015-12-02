<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitado extends Model
{
    protected $table = 'solicitados';

    public $timestamps = false;

    protected $fillable = ['cargo_id','estado'];

    public function cargo()
    {
        return $this->hasOne('App\Cargo','cargo_id');
    }
}
