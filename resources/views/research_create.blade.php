@extends('layouts.app')

@section('content')
<div class="content">
    <form action="{{ route('research.store') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Marka">
        <input type="submit" value="Osadź">
    </form>
</div>
@endsection