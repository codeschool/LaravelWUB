<?php

$factory->define(App\Market::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->unique()->company,
        'city' => $faker->city,
        'website' => $faker->unique()->domainName,
    ];
});
