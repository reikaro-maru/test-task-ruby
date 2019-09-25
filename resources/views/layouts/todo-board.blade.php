<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="d-flex">
                <p class="h1 text-align-center">Simple todo list</p>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <button type="button" class="btn primary font-weight-bold text-light">
                <i class="fa fa-plus"></i>
                Add TODO List
            </button>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <nav class="navbar primary mt-3">
                    <p class="h1 navbar-brand nav-title">
                        <i class="fa fa-calendar"></i>
                        Test
                    </p>
                <button class="navbar-toggler ml-auto" type="button">
                    <i class="fa fa-edit"></i>
                </button>
                <button class="navbar-toggler" type="button">
                    <i class="fa fa-trash"></i>
                </button>
                </nav>
            </div>
        </div>
        <div class="row justify-content-md-center ">
            <div class="col-md-10">
                <nav class="navbar add-task">
                    <div class="col-md-1">
                        <button class="btn-block border-0" type="button">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <div class="col pl-0 pr-0">
                        <form class="form-inline">
                            <input class="form-control col-md-10 mr-1"
                                   type="search"
                                   placeholder="Start typing here to create a task"
                                   aria-label="Search">
                            <button class="btn btn-success" type="submit">Add Task</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row justify-content-md-center mt-3">
            <div class="col-md-1 ml-1 vl">
                <input type="checkbox" aria-label="Checkbox for following text input">
            </div>
            <div class="col-md-7 vl">
                <p> test task description</p>
            </div>
            <div class="col-md-1">
                <a class="add border-right" title="Add" data-toggle="tooltip"><i class="fa fa-arrows-v mr-1"></i></a>
                <a class="edit border-right" title="Edit" data-toggle="tooltip"><i class="fa fa-edit mr-1"></i></a>
                <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
