<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepository;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

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
        return view('board.todo-board', [
            'tasks' => $this->repository->getforProject($projectId)
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|max:100',
        ]);

        $newTask = $this->repository->create([
            'description' => $request->description,
        ]);

        return $newTask;
    }

    /**
     * @param $id
     * @throws AuthorizationException
     */
    public function destroy($id)
    {
        $this->authorize('destroy', $this->repository->find($id));

        $this->repository->find($id)->delete();
    }

}
