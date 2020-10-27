<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Model\Pelanggan;
use Faker\Generator as Faker;

$factory->define(Pelanggan::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'user_id' => $faker->numberBetween($min = 100000, $max = 999990),
        'email' => $faker->unique()->safeEmail,
        'alamat' => $faker->secondaryAddress,
        'telepon' => $faker->e164PhoneNumber,
    ];
});
