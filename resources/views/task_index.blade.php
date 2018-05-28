@extends('layouts.app')

@section('content')

<div class="content">
    <form method="GET">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <select name="research" id="researchSelect">
                            <option>Research</option>
                            @foreach ($researches as $research)
                            <option>{{ $research->name }}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Experiments Conducted</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td><a href="{{route('research.show', $task->research)}}">{{ $task->research->name }}</a></td>
                    <td><a href="{{ route('task.show', $task)}}">{{ $task->name }}</a></td>
                    <td>{{ $task->description }}</td>
                    <td><a href="{{route('task.show', $task)}}">{{ $task->experiment->count() }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        
        $('#researchSelect').on('change', function(){
            
            console.log($(this).attr('name'));
            var newURL = updateQueryStringParameter(window.location.pathname, $(this).attr('name'), $(this).val());
            $(location).attr('href', newURL);
            //console.log($(this).val());
        });
    });
    function updateQueryStringParameter(uri, key, value) {
        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf('?') !== -1 ? "&" : "?";
        if (uri.match(re)) {
            return uri.replace(re, '$1' + key + "=" + value + '$2');
        }
        else {
            return uri + separator + key + "=" + value;
        }
    }
</script>
@endsection
