<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => 1,
        'health' => numberBetween($min = 5, $max = 25),
        'stamina' => numberBetween($min = 5, $max = 25),
        'attack' => numberBetween($min = 5, $max = 25),
        'defense' => numberBetween($min = 5, $max = 25),
        'speed' => numberBetween($min = 5, $max = 25),
        'accuracy' => numberBetween($min = 5, $max = 25),
    ];
});