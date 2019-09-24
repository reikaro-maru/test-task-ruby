<?php


namespace App\Http\Controllers;

use App\Transformers\UserTransformer;

class UsersController extends Controller
{
    private $transformer;
    private $repository;

    public function __construct(
        UserTransformer $transformer,
        UserRepository $repository)
    {
        $this->transformer = $transformer;
        $this->repository = $repository;
    }

}
