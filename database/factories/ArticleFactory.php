<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'category_id' => function () {
            return Category::inRandomOrder()->first()->id;
        },
        'content' => $faker->text(400)
    ];
});
