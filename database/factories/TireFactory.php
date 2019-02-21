<?php

use Faker\Generator as Faker;
use App\Tire;

$factory->define(Tire::class, function (Faker $faker) {
	$title = $faker->numerify('RB###');
    return [
        'name' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->sentence(2),
        'brand' => $faker->imageUrl($width = 1600, $height = 400),
        'data' => $faker->imageUrl($width = 1200, $height = 800),
        'file' => $faker->imageUrl($width = 800, $height = 800, 'transport'),
        'category' => $faker->randomElement(['CAMION', 'AGRICOLA']),

    ];
});
