<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiment extends Model
{
    //
    public function task()
    {
        return $this->belongsTo('App\Task');
    }

    public function research()
    {
        return $this->belongsTo('App\Research');
    }

    public function participant()
    {
        return $this->belongsTo('App\Participant');
    }
}
