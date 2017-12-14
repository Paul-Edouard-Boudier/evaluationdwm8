<?php

use Faker\Generator as Faker;

$factory->define(App\Vehicle::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName($gender = null|'male'|'female'),
        'doors' => rand(0, 1),
        'height' => $faker->numberBetween($min = 40, $max = 150),
        'length' => $faker->numberBetween($min = 100, $max = 400),
        'boot_capacity' => $faker->numberBetween($min = 10, $max = 600),
        'type_id' => rand(1, 7),
    ];
});
