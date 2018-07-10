<?php

use Faker\Generator as Faker;

$factory->define(App\Entity\Money::class, function (Faker $faker) {
    return [
        'amount' => $faker->randomFloat(2, 0, 1000),
        'currency_id' => $faker->numberBetween(1, 10),
        'wallet_id' => $faker->numberBetween(1, 10)
    ];
});
