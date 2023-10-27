<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmPersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_personne')->insert([
            // Spiderman
            [
                'id' => 1,
                'film_id' => 1, 
                'personne_id' => 1
            ],

            // Super Mario bros
            [
                'id' => 2,
                'film_id' => 2, 
                'personne_id' => 4
            ],

            // Don't look up
            [
                'id' => 3,
                'film_id' => 3, 
                'personne_id' => 7
            ],

            // Wonder woman
            [
                'id' => 4,
                'film_id' => 4, 
                'personne_id' => 10
            ],

            // Inception
            [
                'id' => 5,
                'film_id' => 5, 
                'personne_id' => 13
            ],

            // Seigneur des anneaux
            [
                'id' => 6,
                'film_id' => 6, 
                'personne_id' => 16
            ],

            // Nerve
            [
                'id' => 7,
                'film_id' => 7, 
                'personne_id' => 19
            ],

            // Joker
            [
                'id' => 8,
                'film_id' => 8, 
                'personne_id' => 22
            ],

            // Ready player one
            [
                'id' => 9,
                'film_id' => 9, 
                'personne_id' => 25
            ],

            // Star wars
            [
                'id' => 10,
                'film_id' => 10, 
                'personne_id' => 28
            ],
        ]);
    }
}
