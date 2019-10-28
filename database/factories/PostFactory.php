<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->text,
        'views' => $faker->numberBetween(0,100)
    ];
});
