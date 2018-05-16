<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function experiments()
    {
        return $this->hasMany(Experiment::class);
    }
}
