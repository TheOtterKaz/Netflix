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
    //? Marvel    
        // Les gardiens de la galaxie vol. 1
            [
                'id' => 1,
                'film_id' => 1, 
                'personne_id' => 1,
            ],

            [
                'id' => 2,
                'film_id' => 1, 
                'personne_id' => 71,
            ],

            [
                'id' => 3,
                'film_id' => 1, 
                'personne_id' => 35,
            ],

            [
                'id' => 4,
                'film_id' => 1, 
                'personne_id' => 65,
            ],

        // Thor : amour et tonnerre
            [
                'id' => 5,
                'film_id' => 2, 
                'personne_id' => 2,
            ],

            [
                'id' => 6,
                'film_id' => 2, 
                'personne_id' => 16,
            ],

            [
                'id' => 7,
                'film_id' => 2, 
                'personne_id' => 36,
            ],

            [
                'id' => 8,
                'film_id' => 2, 
                'personne_id' => 65,
            ],

        // Avengers : La guerre de l'infini
            [
                'id' => 9,
                'film_id' => 3, 
                'personne_id' => 1,
            ],

            [
                'id' => 10,
                'film_id' => 3, 
                'personne_id' => 2,
            ],

            [
                'id' => 11,
                'film_id' => 3, 
                'personne_id' => 3,
            ],

            [
                'id' => 12,
                'film_id' => 3, 
                'personne_id' => 4,
            ],

            [
                'id' => 13,
                'film_id' => 3, 
                'personne_id' => 5,
            ],

            [
                'id' => 14,
                'film_id' => 3, 
                'personne_id' => 6,
            ],

            [
                'id' => 15,
                'film_id' => 3, 
                'personne_id' => 7,
            ],

            [
                'id' => 16,
                'film_id' => 3, 
                'personne_id' => 8,
            ],

            [
                'id' => 17,
                'film_id' => 3, 
                'personne_id' => 9,
            ],

            [
                'id' => 18,
                'film_id' => 3, 
                'personne_id' => 37,
            ],

            [
                'id' => 19,
                'film_id' => 3, 
                'personne_id' => 65,
            ],

        // Ironman 2
            [
                'id' => 20,
                'film_id' => 4, 
                'personne_id' => 3,
            ],

            [
                'id' => 21,
                'film_id' => 4, 
                'personne_id' => 9,
            ],

            [
                'id' => 22,
                'film_id' => 4, 
                'personne_id' => 38,
            ],

            [
                'id' => 23,
                'film_id' => 4, 
                'personne_id' => 65,
            ],

        // Captain America : Civil War
            [
                'id' => 24,
                'film_id' => 5, 
                'personne_id' => 3,
            ],

            [
                'id' => 25,
                'film_id' => 5, 
                'personne_id' => 4,
            ],

            [
                'id' => 26,
                'film_id' => 5, 
                'personne_id' => 5,
            ],

            [
                'id' => 27,
                'film_id' => 5, 
                'personne_id' => 37,
            ],

            [
                'id' => 28,
                'film_id' => 5, 
                'personne_id' => 65,
            ],

        // Spiderman : No way home
            [
                'id' => 29,
                'film_id' => 6, 
                'personne_id' => 6,
            ],

            [
                'id' => 30,
                'film_id' => 6, 
                'personne_id' => 7,
            ],

            [
                'id' => 31,
                'film_id' => 6, 
                'personne_id' => 39,
            ],

            [
                'id' => 32,
                'film_id' => 6, 
                'personne_id' => 65,
            ],

        // Black widow
            [
                'id' => 33,
                'film_id' => 7, 
                'personne_id' => 4,
            ],
            
            [
                'id' => 34,
                'film_id' => 7, 
                'personne_id' => 41,
            ],

            [
                'id' => 35,
                'film_id' => 7, 
                'personne_id' => 65,
            ],

        // Doctor Strange dans le multivers de la folie
            [
                'id' => 36,
                'film_id' => 8, 
                'personne_id' => 6,
            ],

            [
                'id' => 37,
                'film_id' => 8, 
                'personne_id' => 40,
            ],

            [
                'id' => 38,
                'film_id' => 8, 
                'personne_id' => 65,
            ],

        // Black Panther
            [
                'id' => 39,
                'film_id' => 9, 
                'personne_id' => 8,
            ],

            [
                'id' => 40,
                'film_id' => 9, 
                'personne_id' => 42,
            ],

            [
                'id' => 41,
                'film_id' => 9, 
                'personne_id' => 65,
            ],

    //? DC
        // Shazam
            [
                'id' => 42,
                'film_id' => 10, 
                'personne_id' => 10,
            ],

            [
                'id' => 43,
                'film_id' => 10, 
                'personne_id' => 43,
            ],

            [
                'id' => 44,
                'film_id' => 10, 
                'personne_id' => 66,
            ],

        // Blue beetle 
            [
                'id' => 45,
                'film_id' => 11, 
                'personne_id' => 11,
            ],

            [
                'id' => 46,
                'film_id' => 11, 
                'personne_id' => 44,
            ],

            [
                'id' => 47,
                'film_id' => 11, 
                'personne_id' => 67,
            ],

        // Black Adam  
            [
                'id' => 48,
                'film_id' => 12, 
                'personne_id' => 12,
            ],

            [
                'id' => 49,
                'film_id' => 12, 
                'personne_id' => 45,
            ],

            [
                'id' => 50,
                'film_id' => 12, 
                'personne_id' => 68,
            ],

        // Krypto  
            [
                'id' => 51,
                'film_id' => 13, 
                'personne_id' => 12,
            ],

            [
                'id' => 52,
                'film_id' => 13, 
                'personne_id' => 17,
            ],

            [
                'id' => 53,
                'film_id' => 13, 
                'personne_id' => 46,
            ],

            [
                'id' => 54,
                'film_id' => 13, 
                'personne_id' => 69,
            ],

        // Zack snyder’s Justice league  
            [
                'id' => 55,
                'film_id' => 14, 
                'personne_id' => 13,
            ],

            [
                'id' => 56,
                'film_id' => 14, 
                'personne_id' => 15,
            ],

            [
                'id' => 57,
                'film_id' => 14, 
                'personne_id' => 47,
            ],

            [
                'id' => 58,
                'film_id' => 14, 
                'personne_id' => 70,
            ],

        // Joker 
            [
                'id' => 59,
                'film_id' => 15, 
                'personne_id' => 14,
            ],

            [
                'id' => 60,
                'film_id' => 15, 
                'personne_id' => 48,
            ],

            [
                'id' => 61,
                'film_id' => 15, 
                'personne_id' => 71,
            ],

        // Wonder woman 
            [
                'id' => 62,
                'film_id' => 16, 
                'personne_id' => 15,
            ],

            [
                'id' => 63,
                'film_id' => 16, 
                'personne_id' => 49,
            ],

            [
                'id' => 64,
                'film_id' => 16, 
                'personne_id' => 47,
            ],

        // The dark knight  
            [
                'id' => 65,
                'film_id' => 17, 
                'personne_id' => 16,
            ],

            [
                'id' => 66,
                'film_id' => 17, 
                'personne_id' => 50,
            ],

            [
                'id' => 67,
                'film_id' => 17, 
                'personne_id' => 70,
            ],

        // Constantine   
            [
                'id' => 68,
                'film_id' => 18, 
                'personne_id' => 17,
            ],

            [
                'id' => 69,
                'film_id' => 18, 
                'personne_id' => 51,
            ],

            [
                'id' => 70,
                'film_id' => 18, 
                'personne_id' => 72,
            ],

    //? Pixar
        // Élémentaire   
            [
                'id' => 71,
                'film_id' => 19, 
                'personne_id' => 18,
            ],

            [
                'id' => 72,
                'film_id' => 19, 
                'personne_id' => 52,
            ],

            [
                'id' => 73,
                'film_id' => 19, 
                'personne_id' => 73,
            ],

        // Alerte rouge   
            [
                'id' => 74,
                'film_id' => 20, 
                'personne_id' => 19,
            ],

            [
                'id' => 75,
                'film_id' => 20, 
                'personne_id' => 53,
            ],

            [
                'id' => 76,
                'film_id' => 20, 
                'personne_id' => 74,
            ],

        // Sens dessus dessous   
            [
                'id' => 77,
                'film_id' => 21, 
                'personne_id' => 20,
            ],

            [
                'id' => 78,
                'film_id' => 21, 
                'personne_id' => 54,
            ],

            [
                'id' => 79,
                'film_id' => 21, 
                'personne_id' => 75,
            ],

        // Brave  
            [
                'id' => 80,
                'film_id' => 22, 
                'personne_id' => 21,
            ],

            [
                'id' => 81,
                'film_id' => 22, 
                'personne_id' => 55,
            ],

            [
                'id' => 82,
                'film_id' => 22, 
                'personne_id' => 58,
            ],

        // Là-haut  
            [
                'id' => 83,
                'film_id' => 23, 
                'personne_id' => 22,
            ],

            [
                'id' => 84,
                'film_id' => 23, 
                'personne_id' => 54,
            ],

            [
                'id' => 85,
                'film_id' => 23, 
                'personne_id' => 75,
            ],

        // Les Incroyable  
            [
                'id' => 86,
                'film_id' => 24, 
                'personne_id' => 23,
            ],

            [
                'id' => 87,
                'film_id' => 24, 
                'personne_id' => 56,
            ],

            [
                'id' => 88,
                'film_id' => 24, 
                'personne_id' => 58,
            ],

        // Trouver Nemo  
            [
                'id' => 89,
                'film_id' => 25, 
                'personne_id' => 24,
            ],

            [
                'id' => 90,
                'film_id' => 25, 
                'personne_id' => 57,
            ],

            [
                'id' => 91,
                'film_id' => 25, 
                'personne_id' => 58,
            ],

        // Monsters inc  
            [
                'id' => 92,
                'film_id' => 26, 
                'personne_id' => 25,
            ],

            [
                'id' => 93,
                'film_id' => 26, 
                'personne_id' => 54,
            ],

            [
                'id' => 94,
                'film_id' => 26, 
                'personne_id' => 58,
            ],

        // Histoire de jouets 
            [
                'id' => 95,
                'film_id' => 27, 
                'personne_id' => 26,
            ],
            [
                'id' => 96,
                'film_id' => 27, 
                'personne_id' => 58,
            ],
            [
                'id' => 97,
                'film_id' => 27, 
                'personne_id' => 76,
            ],

    //? Disney
        // Le souhait
            [
                'id' => 98,
                'film_id' => 28, 
                'personne_id' => 27,
            ],

            [
                'id' => 99,
                'film_id' => 28, 
                'personne_id' => 59,
            ],

            [
                'id' => 100,
                'film_id' => 28, 
                'personne_id' => 77,
            ],

        // La petite sirène
            [
                'id' => 101,
                'film_id' => 29, 
                'personne_id' => 28,
            ],

            [
                'id' => 102,
                'film_id' => 29, 
                'personne_id' => 60,
            ],

            [
                'id' => 103,
                'film_id' => 29, 
                'personne_id' => 78,
            ],

        // Tic et Tac, les rangers du risque : le film
            [
                'id' => 104,
                'film_id' => 30, 
                'personne_id' => 29,
            ],

            [
                'id' => 105,
                'film_id' => 30, 
                'personne_id' => 61,
            ],

            [
                'id' => 106,
                'film_id' => 30, 
                'personne_id' => 79,
            ],

        // Encanto
            [
                'id' => 107,
                'film_id' => 31, 
                'personne_id' => 30,
            ],

            [
                'id' => 108,
                'film_id' => 31, 
                'personne_id' => 62,
            ],

            [
                'id' => 109,
                'film_id' => 31, 
                'personne_id' => 80,
            ],

        // Raya et le dernier dragon
            [
                'id' => 110,
                'film_id' => 32, 
                'personne_id' => 31,
            ],

            [
                'id' => 111,
                'film_id' => 32, 
                'personne_id' => 63,
            ],

            [
                'id' => 112,
                'film_id' => 32, 
                'personne_id' => 80,
            ],

        // Le roi lion
            [
                'id' => 113,
                'film_id' => 33, 
                'personne_id' => 32,
            ],

            [
                'id' => 114,
                'film_id' => 33, 
                'personne_id' => 38,
            ],

            [
                'id' => 115,
                'film_id' => 33, 
                'personne_id' => 81,
            ],

        // Ralph brise l’internet
            [
                'id' => 116,
                'film_id' => 34, 
                'personne_id' => 33,
            ],

            [
                'id' => 117,
                'film_id' => 34, 
                'personne_id' => 64,
            ],

            [
                'id' => 118,
                'film_id' => 34, 
                'personne_id' => 82,
            ],

        // Moana 
            [
                'id' => 119,
                'film_id' => 35, 
                'personne_id' => 12,
            ],
            [
                'id' => 120,
                'film_id' => 35, 
                'personne_id' => 63,
            ],
            [
                'id' => 121,
                'film_id' => 35, 
                'personne_id' => 58,
            ],

        // Zootopia
            [
                'id' => 122,
                'film_id' => 36, 
                'personne_id' => 34,
            ],

            [
                'id' => 123,
                'film_id' => 36, 
                'personne_id' => 64,
            ],

            [
                'id' => 124,
                'film_id' => 36, 
                'personne_id' => 58,
            ],

        ]);
    }
}
