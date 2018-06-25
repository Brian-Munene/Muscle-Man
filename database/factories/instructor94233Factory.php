<?php

use Faker\Generator as Faker;

$factory->define(App\instructor94233::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'contacts'=> $faker->number(10),
        'email' => $faker->email,
        'photo' => $faker->blob,
        'gender' => $faker->gender
    ];
});
