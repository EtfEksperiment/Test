@extends('layouts.app')

@section('content')
<div class="content">
    <form action="{{ route('research.update', $data->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="text" name="name" value="{{ $data->name}}" placeholder="Marka">
        <input type="hidden" name="id" value="{{ $data->id}}">
        <input type="submit" value="Osadź">
    </form>
</div>
@endsection