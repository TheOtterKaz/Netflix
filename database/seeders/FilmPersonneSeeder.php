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
    public function run()
    {
        DB::table('film_personne')->insert([
            // Spiderman
            [
                'film_id' => 1,
                'personne_id' => 1,
            ],
            [
                'film_id' => 1,
                'personne_id' => 2,
            ],
            [
                'film_id' => 1,
                'personne_id' => 3,
            ],

            // Super mario bros
            [
                'film_id' => 2,
                'personne_id' => 4,
            ],
            [
                'film_id' => 2,
                'personne_id' => 5,
            ],
            [
                'film_id' => 2,
                'personne_id' => 6,
            ],

            // Don't look up
            [
                'film_id' => 3,
                'personne_id' => 7,
            ],
            [
                'film_id' => 3,
                'personne_id' => 8,
            ],
            [
                'film_id' => 3,
                'personne_id' => 9,
            ],

            // Wonder woman 1984
            [
                'film_id' => 4,
                'personne_id' => 10,
            ],
            [
                'film_id' => 4,
                'personne_id' => 11,
            ],
            [
                'film_id' => 4,
                'personne_id' => 12,
            ],

            // Inception
            [
                'film_id' => 5,
                'personne_id' => 13,
            ],
            [
                'film_id' => 5,
                'personne_id' => 14,
            ],
            [
                'film_id' => 5,
                'personne_id' => 15,
            ],

            // Le seigneur des anneaux
            [
                'film_id' => 6,
                'personne_id' => 16,
            ],
            [
                'film_id' => 6,
                'personne_id' => 17,
            ],
            [
                'film_id' => 6,
                'personne_id' => 18,
            ],

            // Nerve
            [
                'film_id' => 7,
                'personne_id' => 19,
            ],
            [
                'film_id' => 7,
                'personne_id' => 20,
            ],
            [
                'film_id' => 7,
                'personne_id' => 21,
            ],

            // Joker
            [
                'film_id' => 8,
                'personne_id' => 22,
            ],
            [
                'film_id' => 8,
                'personne_id' => 23,
            ],
            [
                'film_id' => 8,
                'personne_id' => 24,
            ],

            // Ready player one
            [
                'film_id' => 9,
                'personne_id' => 25,
            ],
            [
                'film_id' => 9,
                'personne_id' => 26,
            ],
            [
                'film_id' => 9,
                'personne_id' => 27,
            ],

            // Star wars
            [
                'film_id' => 10,
                'personne_id' => 28,
            ],
            [
                'film_id' => 10,
                'personne_id' => 29,
            ],
            [
                'film_id' => 10,
                'personne_id' => 30,
            ],
        ]);
    }
}
