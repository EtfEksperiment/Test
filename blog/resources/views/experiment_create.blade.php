<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </style>
    </head>
    <body>
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
                                <label for="select">Select Task</label>
                                <select name="task" class="form-control" id="select">
                                    @foreach ($tasks as $task)
                                        <option value="{{ $task->id }}">{{ $task->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
               
            </div>
    </body>
</html>
