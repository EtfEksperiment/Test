@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto mt-5">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form action="{{ route('research.store') }}" method="post">
				{{ csrf_field() }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Name: 
						@if($errors->first('name'))
						<span class="alert alert-danger">{{$errors->first('name')}}</span>
						@endif
					</label>
					<input type="text" name="name" class="form-control" value="{{ old('name') }}" id="name" placeholder="Enter name">
				</div>

				<div class="form-group tasks">
					<div>
						<span>Tasks: 
							@if($errors->first('task[]'))
							<span class="alert alert-danger">{{$errors->first('task[]')}}</span>
							@endif
						</span>
						<button type="button" class="btn btn-info add-new-task float-right"><i class="fa fa-plus"></i></button>
					</div>
					<!--<input type="text" name="task" class="form-control" id="task" placeholder="Enter name of task">-->
					<div class="input-group">
						<input type="text" name="task[]" value="{{ old('task[]') }}" class="form-control" id="task" placeholder="Enter name of task" >
						<span class="input-group-btn">
							<button type="button" class="btn btn-danger remove-one-task"><i class="fa fa-minus"></i></button>
						</span>
					</div>
				</div>
				
				<div class="form-group groups">
					<div>
						<span>Groups:
							@if($errors->first('group[]'))
							<span class="alert alert-danger">{{$errors->first('group[]')}}</span>
							@endif
						</span>
						<button type="button" class="btn btn-info add-new-group float-right"><i class="fa fa-plus"></i></button>
					</div>
					<!--<input type="text" name="task" class="form-control" id="task" placeholder="Enter name of task">-->
					<div class="input-group">
						<input type="text" name="group[]" class="form-control" id="task" placeholder="Enter name of group" >
						<span class="input-group-btn">
							<button type="button" class="btn btn-danger remove-one-group"><i class="fa fa-minus"></i></button>
						</span>
					</div>
				</div>

                <!--<div class="form-group">
                    <label for="description">Comment</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder="Enter description">
                </div>-->
                
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		

		function testFnc(containerClass, addBtnClass, removeBtnClass) {
			$(addBtnClass).on('click', function(){
			//$(this).attr("disabled", "disabled");
			var tasks = $(containerClass);
			var task = '<div class="input-group"><input type="text" name="' + containerClass.slice(1, -1) +'[]" class="form-control" id="task" placeholder="Enter name of task" multiple><span class="input-group-btn"><button type="button" class="btn btn-danger '+  removeBtnClass.slice(1) + '"><i class="fa fa-minus"></i></button></span></div>' 
			$(tasks).append(task);
		});

			$(containerClass).on('click', removeBtnClass, function(){
				console.log($(this));
				console.log(($(removeBtnClass).length));
				if(($(removeBtnClass).length) == 1){
					alert('You must have at least one Task');
				} else {
					$(this).parent().parent().remove();
				}


			//$(this).attr("disabled", "disabled");
			/*var tasks = $(".tasks");
			var task = '<div class="input-group"><input type="text" name="task" class="form-control" id="task" placeholder="Enter name of task"><span class="input-group-btn"><button type="button" class="btn btn-danger remove-one"><i class="fa fa-minus"></i></button></span></div>' 
			$(tasks).append(task);*/
		});
		}

		testFnc(".tasks", ".add-new-task", ".remove-one-task");
		testFnc(".groups", ".add-new-group", ".remove-one-group");
	});


</script>
@endsection