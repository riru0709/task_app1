<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daily Task</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>デイリータスク</h1>
        <div class='tasks'>
            @foreach ($daily as $task)
                <div class='task'>
                    <p class='title'>{{ $task->title }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
