<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [ 'worker_profile_id', 'type', 'name', 'description' ];

    public function workerProfile()
    {
        return $this->belongsTo('App\WorkerProfile');
    }

}
