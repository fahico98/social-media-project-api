<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        "user_id" => $faker->numberBetween(2, 25),
        "content" => $faker->paragraph(rand(2, 10))
    ];
});
