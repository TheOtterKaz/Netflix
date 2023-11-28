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

        // Thor : amour et tonnerre
            [
                'id' => 3,
                'film_id' => 2, 
                'personne_id' => 2,
            ],

            [
                'id' => 4,
                'film_id' => 2, 
                'personne_id' => 16,
            ],

            [
                'id' => 5,
                'film_id' => 2, 
                'personne_id' => 36,
            ],

        // Avengers : La guerre de l'infini
            [
                'id' => 6,
                'film_id' => 3, 
                'personne_id' => 1,
            ],

            [
                'id' => 7,
                'film_id' => 3, 
                'personne_id' => 2,
            ],

            [
                'id' => 8,
                'film_id' => 3, 
                'personne_id' => 3,
            ],

            [
                'id' => 9,
                'film_id' => 3, 
                'personne_id' => 4,
            ],

            [
                'id' => 10,
                'film_id' => 3, 
                'personne_id' => 5,
            ],

            [
                'id' => 11,
                'film_id' => 3, 
                'personne_id' => 6,
            ],

            [
                'id' => 12,
                'film_id' => 3, 
                'personne_id' => 7,
            ],

            [
                'id' => 13,
                'film_id' => 3, 
                'personne_id' => 8,
            ],

            [
                'id' => 14,
                'film_id' => 3, 
                'personne_id' => 9,
            ],

        // Ironman 2
            [
                'id' => 15,
                'film_id' => 4, 
                'personne_id' => 3,
            ],

            [
                'id' => 16,
                'film_id' => 4, 
                'personne_id' => 9,
            ],

        // Captain America : Civil War
            [
                'id' => 17,
                'film_id' => 5, 
                'personne_id' => 3,
            ],

            [
                'id' => 18,
                'film_id' => 5, 
                'personne_id' => 4,
            ],

            [
                'id' => 19,
                'film_id' => 5, 
                'personne_id' => 5,
            ],

        // Spiderman : No way home
            [
                'id' => 20,
                'film_id' => 6, 
                'personne_id' => 6,
            ],

            [
                'id' => 21,
                'film_id' => 6, 
                'personne_id' => 7,
            ],

        // Black widow
            [
                'id' => 22,
                'film_id' => 7, 
                'personne_id' => 4,
            ],

        // Doctor Strange dans le multivers de la folie
            [
                'id' => 23,
                'film_id' => 8, 
                'personne_id' => 6,
            ],

        // Black Panther
            [
                'id' => 24,
                'film_id' => 9, 
                'personne_id' => 8,
            ],
    //? DC
        // Shazam
            [
                'id' => 25,
                'film_id' => 10, 
                'personne_id' => 10,
            ],

        // Blue beetle 
            [
                'id' => 26,
                'film_id' => 11, 
                'personne_id' => 11,
            ],

        // Black Adam  
            [
                'id' => 27,
                'film_id' => 12, 
                'personne_id' => 12,
            ],

        // Krypto  
            [
                'id' => 28,
                'film_id' => 13, 
                'personne_id' => 12,
            ],

            [
                'id' => 29,
                'film_id' => 13, 
                'personne_id' => 17,
            ],

        // Zack snyder’s Justice league  
            [
                'id' => 30,
                'film_id' => 14, 
                'personne_id' => 13,
            ],

            [
                'id' => 31,
                'film_id' => 14, 
                'personne_id' => 15,
            ],

        // Joker 
            [
                'id' => 32,
                'film_id' => 15, 
                'personne_id' => 14,
            ],

        // Wonder woman 
            [
                'id' => 33,
                'film_id' => 16, 
                'personne_id' => 15,
            ],

        // The dark knight  
            [
                'id' => 34,
                'film_id' => 17, 
                'personne_id' => 16,
            ],

        // Constantine   
            [
                'id' => 35,
                'film_id' => 18, 
                'personne_id' => 17,
            ],

    //? Pixar
        // Élémentaire   
            [
                'id' => 36,
                'film_id' => 19, 
                'personne_id' => 18,
            ],

        // Alerte rouge   
            [
                'id' => 37,
                'film_id' => 20, 
                'personne_id' => 19,
            ],

        // Sens dessus dessous   
            [
                'id' => 38,
                'film_id' => 21, 
                'personne_id' => 20,
            ],

        // Brave  
            [
                'id' => 39,
                'film_id' => 22, 
                'personne_id' => 21,
            ],

        // Là-haut  
            [
                'id' => 40,
                'film_id' => 23, 
                'personne_id' => 22,
            ],

        // Les Incroyable  
            [
                'id' => 41,
                'film_id' => 24, 
                'personne_id' => 23,
            ],

        // Trouver Nemo  
            [
                'id' => 42,
                'film_id' => 25, 
                'personne_id' => 24,
            ],

        // Monsters inc  
            [
                'id' => 43,
                'film_id' => 26, 
                'personne_id' => 25,
            ],

        // Histoire de jouets 
            [
                'id' => 44,
                'film_id' => 27, 
                'personne_id' => 26,
            ],

    //? Disney
        // Le souhait
            [
                'id' => 45,
                'film_id' => 28, 
                'personne_id' => 27,
            ],

        // La petite sirène
            [
                'id' => 46,
                'film_id' => 29, 
                'personne_id' => 28,
            ],

        // Tic et Tac, les rangers du risque : le film
            [
                'id' => 47,
                'film_id' => 30, 
                'personne_id' => 29,
            ],

        // Encanto
            [
                'id' => 48,
                'film_id' => 31, 
                'personne_id' => 30,
            ],

        // Raya et le dernier dragon
            [
                'id' => 49,
                'film_id' => 32, 
                'personne_id' => 31,
            ],

        // Le roi lion
            [
                'id' => 50,
                'film_id' => 33, 
                'personne_id' => 32,
            ],

        // Ralph brise l’internet
            [
                'id' => 51,
                'film_id' => 34, 
                'personne_id' => 33,
            ],

        // Moana 
            [
                'id' => 52,
                'film_id' => 35, 
                'personne_id' => 12,
            ],

        // Zootopia
            [
                'id' => 53,
                'film_id' => 36, 
                'personne_id' => 34,
            ],




        ]);
    }
}
