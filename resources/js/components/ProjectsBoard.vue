<template>
<div class="container">
    <div class="flex-center full-height"  v-for="project in projects">
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
       <tasks-board :tasks="projects.tasks"></tasks-board>
    </div>
</div>
</template>
<script>
    import tasksBoard from "./TasksBoard";

    export default {
        name: 'ProjectsBoard',
        props: ['projects'],
        components: {
            tasksBoard
        },
    }

</script>
