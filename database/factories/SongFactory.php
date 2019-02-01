<?php

use Faker\Generator as Faker;

$factory->define(App\Song::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'artist' => $faker->artist,
        'body' => $faker->body
    ];
});
