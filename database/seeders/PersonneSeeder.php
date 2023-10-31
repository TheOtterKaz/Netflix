<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([ 
                // Acteurs
            [
                'id' => 1,
                'nom' => 'Pratt',
                'prenom' => 'Chris',
                'dateNaiss' => '1979-06-21',
                'sexe' => 'M',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BNzg3MTgwOTgzMV5BMl5BanBnXkFtZTgwODIxMTUwMjE@._V1_.jpg',
            ],
            [
                'id' => 2,
                'nom' => 'Hemsworth',
                'prenom' => 'Chris',
                'dateNaiss' => '1983-08-11',
                'sexe' => 'M',
                'imagePers' => 'https://th.bing.com/th/id/OIP.HYUy_OVYqYC8IFOPovh6JwHaLH?pid=ImgDet&rs=1',
            ],
            [
                'id' => 3,
                'nom' => 'Downey Jr.',
                'prenom' => 'Robert',
                'dateNaiss' => '1965-04-04',
                'sexe' => 'M',
                'imagePers' => 'https://image.tmdb.org/t/p/original/5A7vGrVJcOLdfow1i9GoXN85Q16.jpg',
            ],
            [
                'id' => 4,
                'nom' => 'Johansson',
                'prenom' => 'Scarlett',
                'dateNaiss' => '1984-11-22',
                'sexe' => 'F',
                'imagePers' => 'https://th.bing.com/th/id/R.26f3fef10758d13faca2a67bb1302faf?rik=U2b7jISZIrssSA&pid=ImgRaw&r=0',
            ],
            [
                'id' => 5,
                'nom' => 'McKellen',
                'prenom' => 'Ian',
                'dateNaiss' => '1939-05-25',
                'sexe' => 'M',
                'imagePers' => 'https://ilarge.lisimg.com/image/904308/1118full-ian-mckellen.jpg',
            ],
            [
                'id' => 6,
                'nom' => 'Evans',
                'prenom' => 'Chris',
                'dateNaiss' => '1981-06-13',
                'sexe' => 'M',
                'imagePers' => 'https://th.bing.com/th/id/R.6dec495bd80ace89ab3f028d75595317?rik=HesKxR5NVSV9bw&pid=ImgRaw&r=0',
            ],
            [
                'id' => 7,
                'nom' => 'Rudd',
                'prenom' => 'Paul',
                'dateNaiss' => '1969-04-06',
                'sexe' => 'M',
                'imagePers' => 'https://www.themoviedb.org/t/p/original/8eTtJ7XVXY0BnEeUaSiTAraTIXd.jpg',
            ],
            [
                'id' => 8,
                'nom' => 'Cumberbatch',
                'prenom' => 'Benedict',
                'dateNaiss' => '1976-07-19',
                'sexe' => 'M',
                'imagePers' => 'https://image.tmdb.org/t/p/original/6g6hInkWkpw6emVZgUBCxui95D9.jpg',
            ],
            [
                'id' => 9,
                'nom' => 'Holland',
                'prenom' => 'Tom',
                'dateNaiss' => '1996-06-01',
                'sexe' => 'M',
                'imagePers' => 'https://i.pinimg.com/originals/0a/95/bf/0a95bf904b32195f97c27ad8d20a1590.jpg',
            ],
            [
                'id' => 10,
                'nom' => 'Boseman',
                'prenom' => 'Chadwick',
                'dateNaiss' => '1976-11-29',
                'sexe' => 'M',
                'imagePers' => 'https://th.bing.com/th/id/R.044f54d1cba7dec97309e0ef5033b479?rik=9wOJ%2fRURiCSe8w&pid=ImgRaw&r=0',
            ],
            [
                'id' => 11,
                'nom' => 'L. Jackson',
                'prenom' => 'Samuel',
                'dateNaiss' => '1948-12-21',
                'sexe' => 'M',
                'imagePers' => 'https://th.bing.com/th/id/R.9b333c95c0cae0ef7d89ce99227123ae?rik=EZUS%2blZ0PQLIIw&pid=ImgRaw&r=0',
            ],

            // Réalisateur
            [
                'id' => 3,
                'nom' => 'E. Rodriguez',
                'prenom' => 'Octavio',
                'dateNaiss' => '1973-10-14',
                'sexe' => 'M',
                'imagePers' => 'https://www.mafab.hu/static/profiles/2020p/308/10/1914444.jpg',
            ],

            // Producteur
            [
                'id' => 4,
                'nom' => 'Arad',
                'prenom' => 'Avi',
                'dateNaiss' => '1948-08-01',
                'sexe' => 'M',
                'imagePers' => 'https://th.bing.com/th/id/OIP.pmuLzADIFNQzwb2qkHcRMgHaLH?pid=ImgDet&rs=1',
            ],

        
        ]);
    }
}
