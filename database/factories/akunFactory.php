<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Akun;
use Faker\Generator as Faker;

$factory->define(Akun::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'pelanggan_id' => $faker->numberBetween($min = 100000, $max = 999990),
        'email' => $faker->unique()->safeEmail,
        'telepon' => $faker->e164PhoneNumber,
        'password' => $faker->password,
    ];
});
