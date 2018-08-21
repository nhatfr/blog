<?php

use Faker\Generator as Faker;
use App\Model\Category;

$factory->define(App\Model\Article::class, function (Faker $faker) {
    return [
        'category_id' => function () {
            return Category::inRandomOrder()->get()->id;
        },
        'title' => $faker->title(),
        'content' => $faker->paragraph(),
        'img' => $faker->string()
    ];
});
