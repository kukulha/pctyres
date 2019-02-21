<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
    	'user_id' => rand(1,5),
    	'category_id' => rand(1,10),
        'name' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->text(144),
        'body' => $faker->text(2500),
        'file' => $faker->imageUrl($width = 1200, $height = 600),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
        ];
});
