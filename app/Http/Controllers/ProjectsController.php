<?php


namespace App\Http\Controllers;

use App\Project;
use App\Repositories\ProjectRepository;
use App\Transformers\ProjectTransformer;
use App\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use League\Fractal\Manager;
use Prettus\Validator\Exceptions\ValidatorException;

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

    /**
     * @param Request $request
     * @return mixed
     * @throws ValidationException
     * @throws ValidatorException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'project_name' => 'required|max:255',
        ]);

       $newProject = $this->repository->create([
            'project_name' => $request->name,
        ]);

        return $newProject;
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
