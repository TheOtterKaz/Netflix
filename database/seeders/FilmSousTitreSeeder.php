<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSousTitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('films_sousTitres')->insert([
            // Spiderman
            [
                'film_id' => 1,
                'langue_id' => 4,
            ],
            [
                'film_id' => 1,
                'langue_id' => 5,
            ],
            [
                'film_id' => 1,
                'langue_id' => 7,
            ],
            [
                'film_id' => 1,
                'langue_id' => 8,
            ],

            // Super mario bros
            [
                'film_id' => 1,
                'langue_id' => 3,
            ],
            [
                'film_id' => 1,
                'langue_id' => 5,
            ],
            [
                'film_id' => 1,
                'langue_id' => 6,
            ],
            [
                'film_id' => 1,
                'langue_id' => 7,
            ],

            // Don't look up
            [
                'film_id' => 1,
                'langue_id' => 2,
            ],
            [
                'film_id' => 1,
                'langue_id' => 3,
            ],
            [
                'film_id' => 1,
                'langue_id' => 4,
            ],
            [
                'film_id' => 1,
                'langue_id' => 5,
            ],

            // Wonder woman 1984
            [
                'film_id' => 1,
                'langue_id' => 5,
            ],
            [
                'film_id' => 1,
                'langue_id' => 6,
            ],
            [
                'film_id' => 1,
                'langue_id' => 7,
            ],
            [
                'film_id' => 1,
                'langue_id' => 8,
            ],

            // Inception
            [
                'film_id' => 1,
                'langue_id' => 1,
            ],
            [
                'film_id' => 1,
                'langue_id' => 2,
            ],
            [
                'film_id' => 1,
                'langue_id' => 4,
            ],
            [
                'film_id' => 1,
                'langue_id' => 6,
            ],

            // Le seigneur des anneaux
            [
                'film_id' => 1,
                'langue_id' => 2,
            ],
            [
                'film_id' => 1,
                'langue_id' => 3,
            ],
            [
                'film_id' => 1,
                'langue_id' => 5,
            ],
            [
                'film_id' => 1,
                'langue_id' => 6,
            ],

            // Nerve
            [
                'film_id' => 1,
                'langue_id' => 3,
            ],
            [
                'film_id' => 1,
                'langue_id' => 4,
            ],
            [
                'film_id' => 1,
                'langue_id' => 6,
            ],
            [
                'film_id' => 1,
                'langue_id' => 7,
            ],

            // Joker
            [
                'film_id' => 1,
                'langue_id' => 4,
            ],
            [
                'film_id' => 1,
                'langue_id' => 6,
            ],
            [
                'film_id' => 1,
                'langue_id' => 7,
            ],
            [
                'film_id' => 1,
                'langue_id' => 8,
            ],

            // Ready player one
            [
                'film_id' => 1,
                'langue_id' => 2,
            ],
            [
                'film_id' => 1,
                'langue_id' => 4,
            ],
            [
                'film_id' => 1,
                'langue_id' => 6,
            ],
            [
                'film_id' => 1,
                'langue_id' => 8,
            ],

            // Star wars
            [
                'film_id' => 1,
                'langue_id' => 1,
            ],
            [
                'film_id' => 1,
                'langue_id' => 2,
            ],
            [
                'film_id' => 1,
                'langue_id' => 3,
            ],
            [
                'film_id' => 1,
                'langue_id' => 7,
            ],
        ]);
    }
}
