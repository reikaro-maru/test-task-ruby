<?php


namespace App\Transformers;


use App\Project;
use League\Fractal\TransformerAbstract;

/**
 * Class ProjectTransformer
 * @package App\Transformers
 * * @param Project $project
 *
 * @return array
 */
class ProjectTransformer extends TransformerAbstract
{
    /**
     * @param Project $project
     *
     * @return array
     */
    public function transform(Project $project)
    {
        return [
            'id' => (int)$project->id,
            'project_name' => $project->project_name,
            'user_id' => $project->user_id,
            'updated_at' => (string)$project->updated_at,
        ];
    }
}
