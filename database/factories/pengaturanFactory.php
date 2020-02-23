<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\pengaturan;
use Faker\Generator as Faker;

$factory->define(pengaturan::class, function (Faker $faker) {
    return [
        'nama_ujian'      => $faker->name,
        'waktu'           => rand(10, 40),
        'nilai_min'       => rand(1, 10),
        'peraturan_ujian' => $faker->name,
    ];
});
