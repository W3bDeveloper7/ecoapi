<?php

use Faker\Generator as Faker;

$factory->define(App\Program::class, function (Faker $faker) {
    return [
        'name'        => ['weight loss', 'muscle gain', 'maintenance'][$faker->numberBetween(0, 2)],
        'description' => $faker->paragraph
        //
    ];
});
