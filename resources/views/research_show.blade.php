@extends('layouts.app')

@section('content')
<div class="content">
    <h2>Tasks for Research {{$data->name}}</h2>
    @if(count($data->tasks))
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->tasks as $task)
            <tr>
                <td><a href="{{ route('task.show', $task )}}">{{ $task->name }}</a></td>
                <td>{{ $task->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>There is no task for this Research</p>
    @endif
</div>
@endsection