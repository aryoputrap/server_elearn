<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\nilai;
use Faker\Generator as Faker;

$factory->define(nilai::class, function (Faker $faker) {
    return [
        'id_user' => function () {
            return \App\User::all()->random();
        },
        'benar' => rand(10, 20),
        'salah' => rand(10, 20),
        'kosong' => rand(10, 20),
        'score' => rand(10, 20),
        'keterangan' => $faker->word,
    ];
});
