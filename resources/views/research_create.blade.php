@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto mt-5">
			<form action="{{ route('research.store') }}" method="post">
				{{ csrf_field() }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
				</div>

				<div class="form-group tasks">
					<label for="comment">
						Tasks
						<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i></button>
					</label>
					<!--<input type="text" name="task" class="form-control" id="task" placeholder="Enter name of task">-->
					<div class="input-group">
						<input type="text" name="task" class="form-control" id="task" placeholder="Enter name of task">
						<span class="input-group-btn">
							<button type="button" class="btn btn-danger remove-one"><i class="fa fa-minus"></i></button>
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

		$(".add-new").on('click', function(){
			//$(this).attr("disabled", "disabled");
			var tasks = $(".tasks");
			var task = '<div class="input-group"><input type="text" name="task" class="form-control" id="task" placeholder="Enter name of task"><span class="input-group-btn"><button type="button" class="btn btn-danger remove-one"><i class="fa fa-minus"></i></button></span></div>' 
			$(tasks).append(task);
		});

		$(".tasks").on('click', ".remove-one", function(){
			console.log($(this));
			$(this).parent().parent().remove();
			
			//$(this).attr("disabled", "disabled");
			/*var tasks = $(".tasks");
			var task = '<div class="input-group"><input type="text" name="task" class="form-control" id="task" placeholder="Enter name of task"><span class="input-group-btn"><button type="button" class="btn btn-danger remove-one"><i class="fa fa-minus"></i></button></span></div>' 
			$(tasks).append(task);*/
		});
	});

</script>
@endsection