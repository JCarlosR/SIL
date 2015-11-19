<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function workerProfile()
    {
        return $this->belongsTo('App\WorkerProfile');
    }
}
