<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class FiltersAbstract 
{
	protected $request;

	protected $filters = [];

	public function __construct (Request $request)
	{
		$this->request = $request;
	}

	public function filter(Builder $builder) 
	{
		//return $builder;
		foreach ($this->getFilters() as $filter => $value) {
			//echo($filter);
			$a = $this->resolveFilter($filter)->filter($builder, $value);

			($a);
		}
		return $builder;
	}


	public function add(array $filters)
	{
		$this->filters = array_merge($this->filters, $filters);
		
		return $this;
	}



	protected function resolveFilter($filter)
	{
		return new $this->filters[$filter];
	}

	protected function getFilters()
	{
		return $this->filterFilters($this->filters);
	}

	protected function filterFilters($filters)
	{
		//return $filters;
		return array_filter($this->request->only(array_keys($this->filters)));
	}
}