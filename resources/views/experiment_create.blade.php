@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <form action="{{ route('experiment.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="comment">Comment</label>
                    <input type="text" name="comment" class="form-control" id="comment" placeholder="Enter comment">
                </div>

                <div class="form-group">
                    <label for="select">Select Task</label>
                    <select name="task" class="form-control" id="select">
                        @foreach ($tasks as $task)
                        <option value="{{ $task->id }}">{{ $task->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
    
</div>
@endsection
