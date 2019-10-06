<?php

namespace App\Policies;

use App\Project;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    public function destroy(Project $project, Task $task)
    {
        return $project->id === $task->project_id;
    }
}
