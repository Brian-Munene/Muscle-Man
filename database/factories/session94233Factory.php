<?php

use Faker\Generator as Faker;

$factory->define(App\session94233::class, function (Faker $faker) {
    return [
        'userID' => $faker->number(1), 
        'location'=>$faker-> name,
        'exercise_type'=>$faker->text(20),
        'reps'=>$faker->number(1),
        'sets'=>$faker->number(1),
        'date'=>$faker->date
    ];
});
