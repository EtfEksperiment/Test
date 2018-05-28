<?php 

namespace App\Filters\Task;

use Illuminate\Database\Eloquent\Builder;

class ResearchFilter 
{
	public function filter(Builder $builder, $value)
	{
		return $builder->whereHas('research', function(Builder $builder) use ($value){
			$builder->where('name', $value);
		});
		//return $builder->where('research_id', $value);
	}
}