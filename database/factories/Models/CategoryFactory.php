<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'parent_id' => factory(\App\Models\Category::class),
        'lift' => $faker->randomNumber(),
        'rgt' => $faker->randomNumber(),
        'depth' => $faker->randomNumber(),
        'name' => $faker->name,
        'slug' => $faker->slug,
    ];
});
