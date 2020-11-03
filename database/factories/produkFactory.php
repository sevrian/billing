<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Produk;
use Faker\Generator as Faker;

$factory->define(Produk::class, function (Faker $faker) {

    return [
        'nama_produk' => $faker->name,
        'harga' => $faker->numberBetween($min = 100000, $max = 999990),

    ];
});
