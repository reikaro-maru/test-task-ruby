<template>
<div class="flex-center position-ref full-height">
    <div class="container" v-for="project in projects">
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
                        {{ project.project_name }}
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
                        <form class="form-inline" method="POST">
                            <input class="form-control col-md-10 mr-1"
                                   type="search"
                                   name="project_name"
                                   placeholder="Start typing here to create a task"
                                   aria-label="Search">
                            <button class="btn btn-success" type="submit">Add Task</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row justify-content-md-center mt-3" v-for="task in projects.tasks">
            <div class="col-md-1 ml-1 vl">
                <input type="checkbox" aria-label="Checkbox for following text input">
            </div>
            <div class="col-md-7 vl">
                <p> {{task.description}} </p>
            </div>
            <div class="col-md-1">
                <a class="add border-right" title="Add" data-toggle="tooltip"><i class="fa fa-arrows-v mr-1"></i></a>
                <a class="edit border-right" title="Edit" data-toggle="tooltip"><i class="fa fa-edit mr-1"></i></a>
                <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    export default {
        props: ['projects'],

    }

</script>
