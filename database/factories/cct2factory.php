<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\cct2;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'kelas'          => $faker->name,
        'nik'            => '12201010',
        'nama'           => $faker->name,
        'tier11'         => $faker->name,
        'tier12'         => $faker->name,
        'tier13'         => $faker->name,
        'tier13_e'       => $faker->name,
        'tier14'         => $faker->name,
        'tier21'         => $faker->name,
        'tier31'         => $faker->name,
        'tier32'         => $faker->name,
        'tier33'         => $faker->name,
        'tier33_e'       => $faker->name,
        'tier34'         => $faker->name,
        'tier41'         => $faker->name,
        'tier42'         => $faker->name,
        'tier43'         => $faker->name,
        'tier44'         => $faker->name,
        'tier61'         => $faker->name,
        'tier71'         => $faker->name,
        'tier72'         => $faker->name,
        'tier73'         => $faker->name,
        'tier73_e'       => $faker->name,
        'tier74'         => $faker->name,
    ];
});
