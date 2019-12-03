<?php

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title_catalan'=>$faker->text(30),
        'title_spanish'=>$faker->text(30),
        'content_catalan'=>$faker->text(300),
        'content_spanish'=>$faker->text(300),
        'date'=>$faker->date(),
        'expired'=>false,
    ];
});