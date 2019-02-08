<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        // Membuat format dummy data
        'title' => $faker->sentence(10),
        'body' => $faker->paragraph(30)
    ];
});
