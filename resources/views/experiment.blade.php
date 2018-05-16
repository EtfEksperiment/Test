@extends('layouts.app')

@section('content')


<div class="content">
    <form action="{{ route('experiment.store') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Marka">
        <input type="text" name="comment" placeholder="Model">
        <input type="submit" value="Osadź">
    </form>
</div>

@endsection