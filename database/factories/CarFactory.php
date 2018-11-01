<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('honda','toyota','ford')),
        'Model' => $faker->str_random(10),
        'Year'=> $faker->year($max='now'),
    ];
});
