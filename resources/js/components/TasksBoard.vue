<template>
    <div class="container">
        <div class="row justify-content-md-center mt-3" v-for="task in tasks">
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
</template>

<script>
    export default {
        name: "TasksBoard",
        props: ['tasks']
    }
</script>

