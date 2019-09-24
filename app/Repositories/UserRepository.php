<?php


namespace App\Repositories;

use App\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository
{
    public $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|unique:users|email',
        'password' => 'string|max:1000',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }
}
