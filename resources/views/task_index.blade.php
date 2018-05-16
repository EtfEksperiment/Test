@extends('layouts.app')

@section('content')

<div class="content">
    <table class="table">
        <thead>
          <tr>
            <th>Research</th>
            <th>Name</th>
            <th>Description</th>
            <th>Experiments Conducted</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $task)
        <tr>
            <td><a href="{{route('research.show', $task->research)}}">{{ $task->research->name }}</a></td>
            <td><a href="{{ route('task.show', $task)}}">{{ $task->name }}</a></td>
            <td>{{ $task->description }}</td>
            <td><a href="{{route('task.show', $task)}}">{{ $task->experiment->count() }}</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection