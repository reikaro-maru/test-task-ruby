<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <p class="h1 text-center">Simple todo list</p>
        <button type="button" class="btn btn-primary">
            <i class="fa fa-home"></i>Add TODO List
        </button>

        {{--            @foreach($projects as $project)--}}
{{--                {{ $project }}--}}
{{--            @endforeach--}}
    </div>
</div>
</body>
</html>
