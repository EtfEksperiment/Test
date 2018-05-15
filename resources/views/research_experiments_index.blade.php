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
                <h2>Experiments for Research {{$research->name}}</h2>
                @if(count($research->experiments))
                <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($research->experiments as $experiment)
                        <tr>
                            <td><a href="{{ route('experiment.show', $experiment )}}">{{ $experiment->name }}</a></td>
                            <td>{{ $experiment->comment }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <p>There is no experiments for this research</p>
                @endif
            </div>
        </div>
    </body>
</html>
