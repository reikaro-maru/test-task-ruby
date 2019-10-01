<?php

/** @var Factory $factory */

use App\Task;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence,
        'project_id' => rand(1,3),
        'status' => $faker->boolean,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
