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
//        Request $request,
        ProjectTransformer $transformer,
        ProjectRepository $repository
    )
    {
//        $this->request = $request;
        $this->transformer = $transformer;
        $this->repository = $repository;
    }

    /**
     * @param $userId
     * @param User $user
     * @return mixed
     */
    public function list($userId)
    {
        $projects = $this->repository->find($userId);

       return view('layouts.todo-board', compact('projects'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->respondWithItem($this->repository->find($id), $this->transformer);
    }
}
