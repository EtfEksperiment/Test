<?php 

namespace App\Filters\Task;

use App\Filters\FiltersAbstract;
use App\Filters\Task\ResearchFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class TaskFilters extends FiltersAbstract
{
	protected $filters = [
		'research' => ResearchFilter::class,
	];
} 