<?php

$factory->define(Etsh\Post\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});