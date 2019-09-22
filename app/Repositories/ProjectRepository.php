<?php


namespace App\Repositories;

use App\Project;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectRepository extends BaseRepository
{
    public $rules = [
        'user_id' => 'required|exists:users,id',
        'project_name' => 'required|string|max:255'
    ];

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

    public function getforUser($userId)
    {
        return $this->whereHas('user', function ($query) use ($userId) {
            $query->where('id', $userId);
        })->get();
    }
}
