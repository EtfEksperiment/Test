<?php

namespace App;

use App\Filters\Task\TaskFilters;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Task extends Model
{
	public function scopeFilter(Builder $builder, $request, array $filters=[]) 
	{
		//return $builder;
		return (new TaskFilters($request))->add($filters)->filter($builder);
	}


    public function experiment()
	{
    	return $this->hasMany('App\Experiment');
	}

	public function research()
	{
    	return $this->belongsTo('App\Research');
	}


}
