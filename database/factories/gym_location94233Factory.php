<?php

use Faker\Generator as Faker;

$factory->define(App\gym_location94233::class, function (Faker $faker) {
    return [
        'title' => $faker->text(15),
        'latitude' => $faker->float,
        'longitude' => $faker->float
    ];
});
