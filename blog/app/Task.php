<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function experiment()
	{
    	return $this->belongsToMany('App\Experiment');
	}
	public function research()
	{
    	return $this->belongsTo('App\Research');
	}

}
