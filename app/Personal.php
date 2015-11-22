<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'Personals';

    public $timestamps = false;

    protected $fillable = ['user_id','full_name','dni','email','phone','address'];

    public function usuario()
    {
        return $this->hasOne('App\User','user_id');
    }
}
