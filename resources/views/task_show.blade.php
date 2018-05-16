@extends('layouts.app')

@section('content')
<div class="content">
    <h2>This Task belongs to <a href="{{ route('research.show', $data->research)}}">{{$data->research->name}}</a> Research</h2>
    <h2>Experiments for Task {{$data->name}}</h2>
    @if(count($data->experiment))
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->experiment as $experiment)
            <tr>
                <td><a href="{{ route('experiment.show', $experiment)}}">{{ $experiment->name }}</a></td>
                <td>{{ $experiment->comment }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>There is no experiments for this task</p>
    @endif
</div>
@endsection