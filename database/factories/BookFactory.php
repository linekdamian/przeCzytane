<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker){
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Publisher::class, function (Faker $faker){
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'isbn' => $faker->unique()->isbn13,
        'title' => $faker->words($nb = 3, $asText = true),
        'publisher_id' => rand(1,20),
        'category_id' => rand(1,10),
        'description' => $faker->paragraphs($nb = 3, $asText = true)
    ];
});

$factory->define(App\Author::class, function (Faker $faker){
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
    ];
});