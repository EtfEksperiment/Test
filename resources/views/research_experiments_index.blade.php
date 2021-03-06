@extends('layouts.app')

@section('content')
<div class="content">
    <h2>Experiments for Research {{$research->name}}</h2>
    @if(count($research->experiments))
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($research->experiments as $experiment)
            <tr>
                <td><a href="{{ route('experiment.show', $experiment )}}">{{ $experiment->name }}</a></td>
                <td>{{ $experiment->comment }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>There is no experiments for this research</p>
    @endif
</div>
@endsection