@extends('layouts.app')

@section('content')

<div class="content">
   <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Research <b>Details</b></h2></div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i><a href="{{route('research.create')}}">Add New</a> </button>
                </div>
            </div>
        </div>
        <table class="table table-bordered col-sm-8">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Tasks</th>
                    <th>Conducted Experiments</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $research)
                <tr>
                    <td><a href="{{route('research.show', $research)}}">{{ $research->name }}</a></td>
                    <td>
                        @foreach ($research->tasks as $task)
                        <a href="{{route('task.show', $task)}}">{{ $task->name }}</a>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{route('research.experiments', $research)}}">{{ $research->experiments->count() }}</a>
                    </td>
                    <td>
                        <a class="edit" href="{{ route('research.edit', $research)}}" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a class="delete" href="#" title="Delete" data-toggle="tooltip" name="{{$research->id}}"><i class="material-icons">&#xE872;</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</div>
<script type="text/javascript">
$(document).ready(function() {

    $(".delete").on('click', function(){
        var researchId = $(this).attr("name");
        if(researchId) {
            $.ajax({
                url: 'research/' + researchId,
                type:"DELETE",
                headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                //dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(tasks) {
                    console.log(tasks);
                },
                error:function(tasks) {
                    $('select[name="task"]').empty();
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="task"]').empty();
        }

    });

});    
</script>
@endsection