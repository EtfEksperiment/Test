<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Research</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Experiments Conducted</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $task)
                        <tr>
                            <td><a href="{{route('research.show', $task->research)}}">{{ $task->research->name }}</a></td>
                            <td><a href="{{ route('task.show', $task)}}">{{ $task->name }}</a></td>
                            <td>{{ $task->description }}</td>
                            <td><a href="{{route('task.show', $task)}}">{{ $task->experiment->count() }}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
