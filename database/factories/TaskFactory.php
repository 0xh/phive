<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'project_id' => function () {
            return factory(App\Models\Project::class)->create()->id;
        },
        'description' => $faker->sentence,
        'completed'   => $faker->boolean,
    ];
});
