@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <form action="{{ route('experiment.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="comment">Comment</label>
                    <input type="text" name="comment" class="form-control" id="comment" placeholder="Enter comment">
                </div>
                
                <div class="form-group">
                    <label for="participant">participant</label>
                    <input type="text" name="participant" class="form-control" id="participant" placeholder="Enter participant">
                </div>



                <div class="form-group">
                    <label for="research">Select Research</label>
                    <select name="research" class="form-control" id="research">
                        @foreach ($researches as $research)
                        <option value="{{ $research->id }}">{{ $research->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="task">Select Task</label>
                    <select name="task" class="form-control" id="task">
                        <option>--Task--</option>
                        <!--@foreach ($researches as $research)
                        <option value="{{ $research->id }}">{{ $research->name }}</option>
                        @endforeach-->
                    </select>
                </div>
                <div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>
                
                <input class="btn btn-primary" type="submit" value="Submit">

            </form>
        </div>
    </div>
    <script src="{{ asset('js/custom.js') }}"></script>    
</div>

@endsection
