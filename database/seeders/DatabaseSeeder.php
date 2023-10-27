<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PersonneSeeder::class);
        $this->call(LangueSeeder::class);
        $this->call(FilmSeeder::class);
        $this->call(FilmLangueSeeder::class);
        $this->call(FilmSousTitreSeeder::class);
        $this->call(FilmPersonneSeeder::class);
    }
}
