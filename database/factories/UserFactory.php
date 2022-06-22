<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function(Faker $faker){

    $maritalStatus = ["none", "single", "engaged", "married"];
    $location = $faker->city() . " - " . $faker->state();

    return [
        "email" => $faker->unique()->freeEmail(),
        "username" => $faker->userName(),
        "password" => Hash::make("12345678"),
        "biography" => $faker->paragraph(),
        "location" => $location,
        "birthday" => $faker->dateTimeInInterval("-40 years", "+25 years"),
        "marital_status" => $maritalStatus[rand(0, 3)]
    ];
});

$factory->state(User::class, "male", function(Faker $faker){
    return [ "name" => $faker->name("male") ];
});

$factory->state(User::class, "female", function(Faker $faker){
    return [ "name" => $faker->name("female") ];
});
