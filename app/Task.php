<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function experiment()
	{
    	return $this->hasMany('App\Experiment');
	}
	public function research()
	{
    	return $this->belongsTo('App\Research');
	}

}
