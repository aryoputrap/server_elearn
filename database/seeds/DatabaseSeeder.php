<?php

use Illuminate\Database\Seeder;
use App\User;
use App\soal;
use App\pengaturan;
use App\nilai;

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
    }
}