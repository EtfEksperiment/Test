<?php

namespace App\Http\Controllers;

use App\Research;
use App\Task;
use App\Group;
use Illuminate\Http\Request;
//use App\Http\Requests\Request;


class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researches = \App\Research::all();
        return view('research_index', ['data' => $researches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('research_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\StoreResearch $request)
    {

        $validated = $request->validated(); 
        //dd($request->input('task'));
        $research = new Research;
        $research->name = $request->name;
        $research->save();
        foreach ($request->input('task') as $taskVal) {
            $task = new Task;
            $task->name = $taskVal;
            $research->tasks()->save($task);
        }
        foreach ($request->input('group') as $groupVal) {
            $group = new Group;
            $group->name = $groupVal;
            $research->groups()->save($group);
        }
        //$research->save();
        return redirect()->route('research.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Research $research)
    {
        return view('research_show', ['data' => $research]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Research $research)
    {
        return ($research);
    }

    public function getTasks(Research $research)
    {
        $tasks = $research->tasks;
        return json_encode($tasks);
    }
}
