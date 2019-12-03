<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Novelty;
use Faker\Generator as Faker;

$factory->define(Novelty::class, function (Faker $faker) {
    return [
        'title_catalan' => $faker->sentence(1),
        'title_spanish' => $faker->sentence(1),
        'content_catalan' => $faker->paragraph(15),
        'content_spanish' => $faker->paragraph(15),
    ];
});
