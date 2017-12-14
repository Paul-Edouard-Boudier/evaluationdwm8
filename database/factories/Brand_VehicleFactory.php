<?php

use Faker\Generator as Faker;

$factory->define(App\Brand_Vehicle::class, function (Faker $faker) {
    return [
        'brand_id' => rand(1, 8),
        'vehicle_id' => $faker->unique()->numberBetween($min = 1, $max = 30),
    ];
});
