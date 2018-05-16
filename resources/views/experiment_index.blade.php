@extends('layouts.app')

@section('content')
<div class="content">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $experiment)
            <tr>
                <td><a href="{{ route('experiment.show', $experiment )}}">{{ $experiment->name }}</a></td>
                <td>{{ $experiment->comment }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection