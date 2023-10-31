<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            // Spiderman
            [                         
                'titre' => 'Spider-Man : Across the Spider-Verse',
                'resume' => 'Après avoir retrouvé Gwen Stacy, Spider-Man, le sympathique héros originaire de Brooklyn, est catapulté à travers le Multivers, où il rencontre une équipe de Spider-Héros chargée d\'en protéger l\'existence.',
                'brand' => 'Marvel',
                'cote' => '96',
                'rating' => 'Général',
                'duree' => '141',
                'annee' => '2023',
                'realisateur_id' => 3,
                'producteur_id' => 4,
                'type' => 'Animation',
                'imageFilm' => 'https://www.cinecroisiere.fr/i/films/595g.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=iZSRP2UYtO4',
            ],
  
        ]);
    }
}
