@extends('layouts.app')

@section('content')
<div class="content">
    <form action="{{ route('experiment.update', $data->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="text" name="name" value="{{ $data->name}}" placeholder="Marka">
        <input type="text" name="comment" value="{{ $data->comment}}" placeholder="Model">
        <input type="hidden" name="id" value="{{ $data->id}}">
        <input type="submit" value="Osadź">
    </form>
</div>
@endsection