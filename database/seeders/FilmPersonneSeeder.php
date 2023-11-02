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
        // Les gardiens de la galaxie vol. 1
            [
                'id' => 1,
                'film_id' => 1, 
                'personne_id' => 1,
            ],

        // Les gardiens de la galaxie vol. 2
            [
                'id' => 2,
                'film_id' => 2, 
                'personne_id' => 1,
            ],

        // Les gardiens de la galaxie vol. 3
            [
                'id' => 3,
                'film_id' => 3, 
                'personne_id' => 1,
            ],

        // Thor : le monde des ténèbres 
            [
                'id' => 4,
                'film_id' => 4, 
                'personne_id' => 2,
            ],

            [
                'id' => 5,
                'film_id' => 4, 
                'personne_id' => 6,
            ],

        // Thor : Ragnarok
            [
                'id' => 6,
                'film_id' => 5, 
                'personne_id' => 2,
            ],

            [
                'id' => 7,
                'film_id' => 5, 
                'personne_id' => 8,
            ],

        // Thor : amour et tonnerre
            [
                'id' => 8,
                'film_id' => 6, 
                'personne_id' => 2,
            ],

        //  Avengers : Le film
            [
                'id' => 9,
                'film_id' => 7, 
                'personne_id' => 2,
            ],

        // Avengers : L'ère d'Ultron
            [
                'id' => 10,
                'film_id' => 8, 
                'personne_id' => 2,
            ],

            [
                'id' => 11,
                'film_id' => 8, 
                'personne_id' => 3,
            ],

            [
                'id' => 12,
                'film_id' => 8, 
                'personne_id' => 4,
            ],

            [
                'id' => 13,
                'film_id' => 8, 
                'personne_id' => 6,
            ],

            [
                'id' => 14,
                'film_id' => 8, 
                'personne_id' => 11,
            ],

        // Avengers : La guerre de l'infini
            [
                'id' => 15,
                'film_id' => 9, 
                'personne_id' => 1,
            ],

            [
                'id' => 16,
                'film_id' => 9, 
                'personne_id' => 2,
            ],

            [
                'id' => 17,
                'film_id' => 9, 
                'personne_id' => 3,
            ],

            [
                'id' => 18,
                'film_id' => 9, 
                'personne_id' => 4,
            ],

            [
                'id' => 19,
                'film_id' => 9, 
                'personne_id' => 6,
            ],

            [
                'id' => 20,
                'film_id' => 9, 
                'personne_id' => 8,
            ],

            [
                'id' => 21,
                'film_id' => 9, 
                'personne_id' => 10,
            ],

            [
                'id' => 22,
                'film_id' => 9, 
                'personne_id' => 11,
            ],

        // Avengers : Endgame
            [
                'id' => 23,
                'film_id' => 10, 
                'personne_id' => 4,
            ],

            [
                'id' => 24,
                'film_id' => 10, 
                'personne_id' => 7,
            ],

            [
                'id' => 25,
                'film_id' => 10, 
                'personne_id' => 8,
            ],

            [
                'id' => 26,
                'film_id' => 10, 
                'personne_id' => 9,
            ],

            [
                'id' => 27,
                'film_id' => 10, 
                'personne_id' => 10,
            ],

            [
                'id' => 28,
                'film_id' => 10, 
                'personne_id' => 11,
            ],

        // Ironman 2
            [
                'id' => 29,
                'film_id' => 11, 
                'personne_id' => 3,
            ],

            [
                'id' => 30,
                'film_id' => 11, 
                'personne_id' => 4,
            ],

            [
                'id' => 31,
                'film_id' => 11, 
                'personne_id' => 11,
            ],

        // Ironman 3
            [
                'id' => 32,
                'film_id' => 12, 
                'personne_id' => 3,
            ],

            // Captain America : Civil War
            [
                'id' => 33,
                'film_id' => 13, 
                'personne_id' => 3,
            ],

            [
                'id' => 34,
                'film_id' => 13, 
                'personne_id' => 4,
            ],

            [
                'id' => 35,
                'film_id' => 13, 
                'personne_id' => 6,
            ],

            [
                'id' => 36,
                'film_id' => 13, 
                'personne_id' => 7,
            ],

            [
                'id' => 37,
                'film_id' => 13, 
                'personne_id' => 9,
            ],

            [
                'id' => 38,
                'film_id' => 13, 
                'personne_id' => 10,
            ],

            // Captain America : Le soldat de l'hiver
            [
                'id' => 39,
                'film_id' => 14, 
                'personne_id' => 4,
            ],

            [
                'id' => 40,
                'film_id' => 14, 
                'personne_id' => 6,
            ],

            [
                'id' => 41,
                'film_id' => 14, 
                'personne_id' => 11,
            ],

            // Spiderman : Homecoming
            [
                'id' => 42,
                'film_id' => 15, 
                'personne_id' => 3,
            ],

            [
                'id' => 43,
                'film_id' => 15, 
                'personne_id' => 6,
            ],

            [
                'id' => 44,
                'film_id' => 15, 
                'personne_id' => 9,
            ],

            // Spiderman : Far from home
            [
                'id' => 45,
                'film_id' => 16, 
                'personne_id' => 9,
            ],

            [
                'id' => 46,
                'film_id' => 16, 
                'personne_id' => 11,
            ],

            // Spiderman : No way home
            [
                'id' => 47,
                'film_id' => 17, 
                'personne_id' => 8,
            ],

            [
                'id' => 48,
                'film_id' => 17, 
                'personne_id' => 9,
            ],

            // Black widow
            [
                'id' => 49,
                'film_id' => 18, 
                'personne_id' => 4,
            ],

            // Capitaine Marvel
            [
                'id' => 50,
                'film_id' => 19, 
                'personne_id' => 4,
            ],

            [
                'id' => 51,
                'film_id' => 19, 
                'personne_id' => 11,
            ],

            // Xmen
            [
                'id' => 52,
                'film_id' => 20, 
                'personne_id' => 5,
            ],

            // Xmen 2
            [
                'id' => 53,
                'film_id' => 21, 
                'personne_id' => 5,
            ],

            // Xmen : L'affrontement final
            [
                'id' => 54,
                'film_id' => 22, 
                'personne_id' => 5,
            ],

            // Xmen : Days of the future past
            [
                'id' => 55,
                'film_id' => 23, 
                'personne_id' => 5,
            ],

            // Wolverine : Le combat de l'immortel
            [
                'id' => 56,
                'film_id' => 24, 
                'personne_id' => 5,
            ],

            // Les 4 fantastiques
            [
                'id' => 57,
                'film_id' => 25, 
                'personne_id' => 6,
            ],

            // Ant-man
            [
                'id' => 58,
                'film_id' => 26, 
                'personne_id' => 7,
            ],

            // Ant-man et la guêpe
            [
                'id' => 59,
                'film_id' => 27, 
                'personne_id' => 7,
            ],

            // Ant-man et la guêpe : Quantumania
            [
                'id' => 60,
                'film_id' => 28, 
                'personne_id' => 7,
            ],

            // Doctor Strange
            [
                'id' => 61,
                'film_id' => 29, 
                'personne_id' => 8,
            ],

            // Doctor Strange dans le multivers de la folie
            [
                'id' => 62,
                'film_id' => 30, 
                'personne_id' => 8,
            ],

            // Black Panther
            [
                'id' => 63,
                'film_id' => 31, 
                'personne_id' => 10,
            ],

            // Black Panther Wakanda forever
            [
                'id' => 64,
                'film_id' => 32, 
                'personne_id' => 10,
            ],
        ]);
    }
}
