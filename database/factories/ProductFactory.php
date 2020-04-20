<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => rand(1, 50) * 100,
        'description' => $faker->paragraph,
        'qr' => ''
    ];
});
