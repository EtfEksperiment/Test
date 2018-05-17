@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto mt-5">
			<form action="{{ route('experiment.update', $experiment->id) }}" method="post">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" id="name" value="{{ $experiment->name}}" placeholder="Enter name">
				</div>
				<div class="form-group">
                    <label for="comment">Comment</label>
                    <input type="text" name="comment" class="form-control" id="comment" value="{{ $experiment->comment}}" placeholder="Enter comment">
                </div>
                <div class="form-group">
                    <label for="research">Select Research</label>
                    <select name="research" class="form-control" id="research">
                        @foreach ($researches as $research)
                        <option value="{{ $research->id }}">{{ $research->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                
				<input type="hidden" name="id" value="{{ $experiment->id}}">
				<input class="btn btn-primary" type="submit" value="Submit">
			</form>
		</div>
	</div>
</div>
@endsection