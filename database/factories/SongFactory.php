<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Song::class, function (Faker $faker) {
    return [
        'artist'       => $faker->name,
        'title'        => $faker->sentence,
        'url'          => $faker->url,
        'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
    ];
});
