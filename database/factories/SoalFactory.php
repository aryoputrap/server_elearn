<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\soal;
use Faker\Generator as Faker;

$factory->define(soal::class, function (Faker $faker) {
    return [
        'gambar'      => $faker->name,
        'soal'      => $faker->name,
        'jawaban_a' => $faker->name,
        'jawaban_b' => $faker->name,
        'jawaban_c' => $faker->name,
        'jawaban_d' => $faker->name,
        'jawaban_e' => $faker->name,
        'kunci_jawaban' => 'c',
    ];
});
