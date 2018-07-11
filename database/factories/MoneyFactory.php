<?php

use Faker\Generator as Faker;

$factory->define(App\Entity\Money::class, function (Faker $faker, array $attr) {
    return [
        'amount' => $faker->randomFloat(2, 0, 1000),
        'currency_id' => $faker->randomElement(App\Entity\Currency::all()->pluck('id')->toArray()),
        'wallet_id' => $attr['wallet_id']
    ];
});
