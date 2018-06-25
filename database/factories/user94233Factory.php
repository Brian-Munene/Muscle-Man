<?php

use Faker\Generator as Faker;

$factory->define(App\user94233::class, function (Faker $faker) {
    return [
        'firstname' => $faker->name(15),
        'lastname' => $faker->name(15),
        'email' => $faker->email(25),
        'password' => $faker->password(8)
    ];
});
