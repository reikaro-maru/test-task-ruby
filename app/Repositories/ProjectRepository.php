<?php


namespace App\Repositories;

use App\Project;
use App\User;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Project::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function getForUser(User $user)
    {
        return Project::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
