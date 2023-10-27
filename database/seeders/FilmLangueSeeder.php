<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmLangueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('films_langues')->insert([
            // Spiderman
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

            // Super mario bros
            [
                'film_id' => 2,
                'langue_id' => 1,
            ],
            [
                'film_id' => 2,
                'langue_id' => 2,
            ],
            [
                'film_id' => 2,
                'langue_id' => 4,
            ],
            [
                'film_id' => 2,
                'langue_id' => 6,
            ],

            // Don't look up
            [
                'film_id' => 3,
                'langue_id' => 1,
            ],
            [
                'film_id' => 3,
                'langue_id' => 2,
            ],
            [
                'film_id' => 3,
                'langue_id' => 3,
            ],
            [
                'film_id' => 3,
                'langue_id' => 8,
            ],

            // Wonder woman 1984
            [
                'film_id' => 4,
                'langue_id' => 1,
            ],
            [
                'film_id' => 4,
                'langue_id' => 2,
            ],
            [
                'film_id' => 4,
                'langue_id' => 4,
            ],
            [
                'film_id' => 4,
                'langue_id' => 5,
            ],

            // Inception
            [
                'film_id' => 5,
                'langue_id' => 1,
            ],
            [
                'film_id' => 5,
                'langue_id' => 2,
            ],
            [
                'film_id' => 5,
                'langue_id' => 3,
            ],
            [
                'film_id' => 5,
                'langue_id' => 8,
            ],

            // Le seigneur des anneaux
            [
                'film_id' => 6,
                'langue_id' => 1,
            ],
            [
                'film_id' => 6,
                'langue_id' => 2,
            ],
            [
                'film_id' => 6,
                'langue_id' => 5,
            ],
            [
                'film_id' => 6,
                'langue_id' => 7,
            ],

            // Nerve
            [
                'film_id' => 7,
                'langue_id' => 1,
            ],
            [
                'film_id' => 7,
                'langue_id' => 2,
            ],
            [
                'film_id' => 7,
                'langue_id' => 5,
            ],
            [
                'film_id' => 7,
                'langue_id' => 6,
            ],

            // Joker
            [
                'film_id' => 8,
                'langue_id' => 1,
            ],
            [
                'film_id' => 8,
                'langue_id' => 2,
            ],
            [
                'film_id' => 8,
                'langue_id' => 3,
            ],
            [
                'film_id' => 8,
                'langue_id' => 4,
            ],

            // Ready player one
            [
                'film_id' => 9,
                'langue_id' => 1,
            ],
            [
                'film_id' => 9,
                'langue_id' => 2,
            ],
            [
                'film_id' => 9,
                'langue_id' => 5,
            ],
            [
                'film_id' => 9,
                'langue_id' => 7,
            ],

            // Star wars
            [
                'film_id' => 10,
                'langue_id' => 1,
            ],
            [
                'film_id' => 10,
                'langue_id' => 2,
            ],
            [
                'film_id' => 10,
                'langue_id' => 4,
            ],
            [
                'film_id' => 10,
                'langue_id' => 6,
            ],
        ]);
    }
}
