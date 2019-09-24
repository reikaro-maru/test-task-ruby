<?php


namespace App\Transformers;


use App\Task;
use League\Fractal\TransformerAbstract;

class TaskTransformer extends TransformerAbstract
{
    /**
     * Transform the Account entity.
     *
     * @param Task $task
     *
     * @return array
     */
    public function transform(Task $task)
    {
        return [
            'id' => (int)$task->id,
            'description' => $task->description,
            'status' => $task->status,
            'updated_at' => (string)$task->updated_at,
        ];
    }
}
