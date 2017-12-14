<?php

use Faker\Generator as Faker;

$factory->define(App\Vehicle_Color::class, function (Faker $faker) {
    return [
        'vehicle_id' => rand(1, 30),
        'color_id' => rand(1, 7),
    ];
});
