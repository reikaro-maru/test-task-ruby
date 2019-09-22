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
     * @param Manager $fractal
     * @param Request $request
     * @param ProjectTransformer $transformer
     * @param ProjectRepository $repository
     */
    public function __construct(
        Manager $fractal,
        Request $request,
        ProjectTransformer $transformer,
        ProjectRepository $repository
    )
    {
        parent::__construct($fractal, $request);
        $this->transformer = $transformer;
        $this->repository = $repository;
    }

    /**
     * @param $userId
     * @param User $user
     * @return mixed
     */
    public function list($userId, User $user)
    {
        dd(111);
        $user->findOrFail($userId);
        $paginator = $this->repository
            ->getForUser($userId)
            ->paginate($this->perPage);

        return $this->respondWithPaginate(
            $paginator->getCollection(),
            $this->transformer,
            $paginator
        );
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
