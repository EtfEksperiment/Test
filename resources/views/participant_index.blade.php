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
            @foreach ($participants as $participant)
            <tr>
                <td><a href="{{route('participant.show', $participant)}}">{{ $participant->name }}</a></td>
                <td>
                    @foreach ($participant->experiments as $experiment)
                    <a href="{{route('experiment.show', $experiment)}}">{{ $experiment->name }}</a>
                    @endforeach
                </td>
                <td>
                    <a href="{{route('participant.show', $participant)}}">{{ $participant->experiments->count() }}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection