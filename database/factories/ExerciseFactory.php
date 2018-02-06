<?php

use Faker\Generator as Faker;

$factory->define(App\Exercise::class, function (Faker $faker) {
    return [
        'name'        => $faker->word,
        'description' => $faker->paragraph,
        'program_id'  => function(){
            return \App\Program::all()->random();
        }
        //
    ];
});
