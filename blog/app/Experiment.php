<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiment extends Model
{
    //
    public function task()
    {
        return $this->belongsToMany('App\Task');
    }
}
