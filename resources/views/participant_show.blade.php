@extends('layouts.app')

@section('content')
<div class="content">
    <h2>Experiments for Participant {{$participant->name}}</h2>
    @if($participant->experiments->count())
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participant->experiments as $experiment)
            <tr>
                <td><a href="{{ route('experiment.show', $experiment )}}">{{ $experiment->name }}</a></td>
                <td>{{ $experiment->comment }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>This participant has not conducted experiments yet</p>
    @endif
</div>
@endsection