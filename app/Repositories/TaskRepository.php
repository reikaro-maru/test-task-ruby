<?php

namespace App\Repositories;

use App\Project;
use App\Task;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class TaskRepository extends BaseRepository
{
    public $rules = [
        'project_id' => 'required|exists:projects,id',
        'description' => 'required|string|max:255'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Task::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function getforProject($projectId)
    {
        return Task::where('project_id', $projectId)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}

