<?php

use Illuminate\Database\Seeder;
use App\User;
use App\soal;
use App\pengaturan;
use App\nilai;
use App\cct1;
use App\cct2;
use App\cct3;
use App\cct4;
use App\skalasikap;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create();
        factory(soal::class, 20)->create();
        factory(pengaturan::class, 20)->create();
        factory(nilai::class, 20)->create();
        factory(cct1::class, 3)->create();
        factory(cct2::class, 3)->create();
        factory(cct3::class, 3)->create();
        factory(cct4::class, 3)->create();
        factory(skalasikap::class, 3)->create();
    }
}
