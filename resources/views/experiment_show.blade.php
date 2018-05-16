@extends('layouts.app')

@section('content')            
<div class="content">
    <h2>Experiments for Task <a href="{{route('task.show', $data->task)}}">{{$data->task->name}}</a></h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->comment }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection