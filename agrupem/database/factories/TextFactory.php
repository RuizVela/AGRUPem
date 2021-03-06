<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Text;
use Faker\Generator as Faker;

$factory->define(Text::class, function (Faker $faker) {
    return [
        'title_catalan' => $faker->sentence(1),
        'title_spanish' => $faker->sentence(1),
        'content_catalan' => $faker->text,
        'content_spanish' => $faker->text,
    ];
});