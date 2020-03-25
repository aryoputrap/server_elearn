<?php

use Illuminate\Database\Seeder;
use App\User;
use App\soal;
use App\pengaturan;
use App\nilai;
use App\cct1;
use App\cc1;

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
        factory(cct1::class, 5)->create();
        factory(cc1::class, 3)->create();
    }
}
