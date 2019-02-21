<?php

use Faker\Generator as Faker;
use App\Message;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'city' => $faker->city,
        'company' => $faker->company,
        'job' => $faker->jobTitle,
        'body' => $faker->realText(144)
    ];
});
