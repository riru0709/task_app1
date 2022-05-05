<!DOCTYPE html>

@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
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
            @foreach ($tasks as $task)
                <div class='task'>
                    <h2 class='title'>{{ $task->title }}</h2>
                </div>
            @endforeach
        </div>
    </body>
</html>
@endsection
