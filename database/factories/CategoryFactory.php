<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->words($nb = 5, $asText = true),
        'description' => $faker->text($maxNbChars = 200),
        'img' => $faker->word()
    ];
});
