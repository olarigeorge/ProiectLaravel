<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'category_id' => factory(\App\Models\Category::class),
        'title' => $faker->sentence(4),
        'slug' => $faker->slug,
        'concent' => $faker->text,
        'image' => $faker->word,
        'status' => $faker->randomElement(["PUBLISHED","DRAFT"]),
        'date' => $faker->date(),
        'featured' => $faker->boolean,
    ];
});
