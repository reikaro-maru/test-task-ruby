<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepository;

class TasksController extends Controller
{
    private $repository;

    /**
     * ProjectsController constructor.
     * @param TaskRepository $repository
     */
    public function __construct(
        TaskRepository $repository
    )
    {
        $this->repository = $repository;
    }

    /**
     * @param $projectId
     * @return mixed
     */
    public function list($projectId)
    {
        dd(1);
        return view('board.todo-board', [
            'tasks' => $this->repository->getforProject($projectId)
        ]);
    }

}
