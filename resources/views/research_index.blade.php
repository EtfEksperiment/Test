@extends('layouts.app')

@section('content')

<div class="content">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Tasks</th>
                <th>Conducted Experiments</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $research)
            <tr>
                <td><a href="{{route('research.show', $research)}}">{{ $research->name }}</a></td>
                <td>
                    @foreach ($research->tasks as $task)
                    <a href="{{route('task.show', $task)}}">{{ $task->name }}</a>
                    @endforeach
                </td>
                <td>
                    <a href="{{route('research.experiments', $research)}}">{{ $research->experiments->count() }}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection