<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Experiment;
use App\Research;

class ExperimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $experiments = Experiment::all();
        return view('experiment_index', ['data' => $experiments]);
        /*foreach ($experiments as $experiment) {
            echo $experiment->name;
            echo '<br>';
            echo $experiment->comment;
        }*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $researches = Research::all();
        return view('experiment_create', compact('researches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $experiment = new Experiment;


        $experiment->name = $request->name;
        $experiment->task_id = $request->task;
        $experiment->participant_id = $request->participant;
        $experiment->comment = $request->comment;

        $experiment->save();
        return redirect()->route('experiment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Experiment $experiment)
    {
        return view('experiment_show', compact('experiment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Experiment $experiment)
    {
        return view('experiment_edit', compact('experiment'));
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
        $experiment = \App\Experiment::find($id);
        $experiment->name = $request->name;
        $experiment->task_id = $request->task_id;
        $experiment->comment = $request->comment;
        $experiment->save();
        
        return redirect()->route('experiment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
