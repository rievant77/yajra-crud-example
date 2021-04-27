<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sample_data;
use Faker\Generator as Faker;

$factory->define(Sample_data::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
    ];
});
