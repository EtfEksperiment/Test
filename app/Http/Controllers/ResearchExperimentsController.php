<?php

namespace App\Http\Controllers;
use App\Research;

use Illuminate\Http\Request;

class ResearchExperimentsController extends Controller
{
	public function index (Research $research)
    {
    	return view('research_experiments_index', compact('research'));
   	}

   	/*public function  (Research $research)
    {
    	return view('research_experiments_index', compact('research'));
   	}*/
}
