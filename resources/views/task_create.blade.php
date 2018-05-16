@extends('layouts.app')

@section('content')
<div class="content">
    <form action="{{ route('task.store') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Marka">
        <input type="text" name="comment" placeholder="Model">
        <select name="research">
            @foreach ($researches as $research)
            <option value="{{ $research->id }}">{{ $research->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Osadź">
    </form>
</div>
@endsection