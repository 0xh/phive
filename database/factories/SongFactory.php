<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Song::class, function (Faker $faker) {
    return [
        'user_id'      => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'artist'       => $faker->name,
        'title'        => $faker->sentence,
        'url'          => $faker->url,
        'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
    ];
});
