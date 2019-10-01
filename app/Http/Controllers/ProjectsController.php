<?php


namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use App\Transformers\ProjectTransformer;
use App\User;
use Illuminate\Http\Request;
use League\Fractal\Manager;

/**
 * Class ProjectsController
 * @package App\Http\Controllers
 */
class ProjectsController extends Controller
{
    private $transformer;
    private $repository;

    /**
     * ProjectsController constructor.
     * @param ProjectTransformer $transformer
     * @param ProjectRepository $repository
     */
    public function __construct(
        ProjectTransformer $transformer,
        ProjectRepository $repository
    )
    {
        $this->middleware('auth');
        $this->transformer = $transformer;
        $this->repository = $repository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function list(Request $request)
    {
        return view('board.todo-board', [
            'projects' => $this->repository->getForUser($request->user())
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'project_name' => 'required|max:255',
        ]);

       $newTask = $this->repository->create([
            'project_name' => $request->name,
        ]);

        return $newTask;
    }
}
