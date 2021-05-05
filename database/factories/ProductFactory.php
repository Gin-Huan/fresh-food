<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
    return [
        'name' => $faker->fruitName(),
        'category_id' => $faker->numberBetween($min = 3, $max = 3),
        'price' => $faker->randomDigit,
        'discount' => $faker->numberBetween($min = 10, $max = 15),
        'image' => $faker->imageUrl($width = 210, $height = 272),
        'status' => $faker->numberBetween($min = 1, $max = 4),
        'description' => $faker->text($maxNbChars = 50)
    ];
});