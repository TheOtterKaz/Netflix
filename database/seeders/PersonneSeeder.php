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
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Scarlett_Johansson_by_Gage_Skidmore_2_%28cropped%2C_2%29.jpg/800px-Scarlett_Johansson_by_Gage_Skidmore_2_%28cropped%2C_2%29.jpg',
            ],
            [
                'id' => 5,
                'nom' => 'Evans',
                'prenom' => 'Chris',
                'dateNaiss' => '1981-06-13',
                'sexe' => 'M',
                'imagePers' => 'https://th.bing.com/th/id/R.6dec495bd80ace89ab3f028d75595317?rik=HesKxR5NVSV9bw&pid=ImgRaw&r=0',
            ],
            [
                'id' => 6,
                'nom' => 'Rudd',
                'prenom' => 'Paul',
                'dateNaiss' => '1969-04-06',
                'sexe' => 'M',
                'imagePers' => 'https://www.themoviedb.org/t/p/original/8eTtJ7XVXY0BnEeUaSiTAraTIXd.jpg',
            ],
            [
                'id' => 7,
                'nom' => 'Cumberbatch',
                'prenom' => 'Benedict',
                'dateNaiss' => '1976-07-19',
                'sexe' => 'M',
                'imagePers' => 'https://image.tmdb.org/t/p/original/6g6hInkWkpw6emVZgUBCxui95D9.jpg',
            ],
            [
                'id' => 8,
                'nom' => 'Holland',
                'prenom' => 'Tom',
                'dateNaiss' => '1996-06-01',
                'sexe' => 'M',
                'imagePers' => 'https://i.pinimg.com/originals/0a/95/bf/0a95bf904b32195f97c27ad8d20a1590.jpg',
            ],
            [
                'id' => 9,
                'nom' => 'Boseman',
                'prenom' => 'Chadwick',
                'dateNaiss' => '1976-11-29',
                'sexe' => 'M',
                'imagePers' => 'https://th.bing.com/th/id/R.044f54d1cba7dec97309e0ef5033b479?rik=9wOJ%2fRURiCSe8w&pid=ImgRaw&r=0',
            ],
            [
                'id' => 10,
                'nom' => 'L. Jackson',
                'prenom' => 'Samuel',
                'dateNaiss' => '1948-12-21',
                'sexe' => 'M',
                'imagePers' => 'https://th.bing.com/th/id/R.9b333c95c0cae0ef7d89ce99227123ae?rik=EZUS%2blZ0PQLIIw&pid=ImgRaw&r=0',
            ],
    
            // Réalisateurs
            [
                'id' => 11,
                'nom' => 'Gunn',
                'prenom' => 'James',
                'dateNaiss' => '1966-08-05',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/James_Gunn_%2828557194032%29_%28cropped%29.jpg/800px-James_Gunn_%2828557194032%29_%28cropped%29.jpg',
            ],
            [
                'id' => 12,
                'nom' => 'Taylor',
                'prenom' => 'Alan',
                'dateNaiss' => '1959-01-13',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/5/54/Alan_Taylor_2013_crop.jpg',
            ],
            [
                'id' => 13,
                'nom' => 'Waititi',
                'prenom' => 'Taika',
                'dateNaiss' => '1975-08-16',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Taika_Waititi_by_Gage_Skidmore_2.jpg/800px-Taika_Waititi_by_Gage_Skidmore_2.jpg',
            ],
            [
                'id' => 14,
                'nom' => 'Whedon',
                'prenom' => 'Joss',
                'dateNaiss' => '1964-06-23',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Joss_Whedon_by_Gage_Skidmore_8.jpg/800px-Joss_Whedon_by_Gage_Skidmore_8.jpg',
            ],
            [
                'id' => 15,
                'nom' => 'Coogler',
                'prenom' => 'Ryan',
                'dateNaiss' => '1986-05-23',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Ryan_Coogler_%2836203771036%29_2.jpg/800px-Ryan_Coogler_%2836203771036%29_2.jpg',
            ],
            [
                'id' => 16,
                'nom' => 'Raimi',
                'prenom' => 'Sam',
                'dateNaiss' => '1959-10-23',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sam_Raimi_by_Gage_Skidmore_2.jpg/800px-Sam_Raimi_by_Gage_Skidmore_2.jpg',
            ],
            [
                'id' => 17,
                'nom' => 'Derrickson',
                'prenom' => 'Scott',
                'dateNaiss' => '1966-07-16',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Scott_Derrickson_by_Gage_Skidmore_%28cropped%29.jpg/800px-Scott_Derrickson_by_Gage_Skidmore_%28cropped%29.jpg',
            ],
            [
                'id' => 18,
                'nom' => 'Reed',
                'prenom' => 'Peyton',
                'dateNaiss' => '1964-07-03',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Peyton_Reed_at_the_World_Premiere_of_Marvel%27s_Ant-Man_-AntMan_-AntManPremiere_-_DSC_0392_%2819115946619%29.jpg/800px-Peyton_Reed_at_the_World_Premiere_of_Marvel%27s_Ant-Man_-AntMan_-AntManPremiere_-_DSC_0392_%2819115946619%29.jpg',
            ],
            [
                'id' => 19,
                'nom' => 'Story',
                'prenom' => 'Tim',
                'dateNaiss' => '1970-03-13',
                'sexe' => 'M',
                'imagePers' => 'https://images.mubicdn.net/images/cast_member/36399/cache-157641-1467606243/image-w856.jpg?size=800x',
            ],
            [
                'id' => 20,
                'nom' => 'Boden',
                'prenom' => 'Anna',
                'dateNaiss' => '1979-10-20',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Ryan-fleck-anne-boden.jpg/800px-Ryan-fleck-anne-boden.jpg',
            ],
            [
                'id' => 21,
                'nom' => 'Shortland',
                'prenom' => 'Cate',
                'dateNaiss' => '1958-08-10',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/5/55/Cate_Shortland_by_Gage_Skidmore_%28cropped%29.jpg',
            ],
            [
                'id' => 22,
                'nom' => 'Watts',
                'prenom' => 'Jon',
                'dateNaiss' => '1981-06-28',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Jon_Watts_by_Gage_Skidmore_2.jpg/800px-Jon_Watts_by_Gage_Skidmore_2.jpg',
            ],
            [
                'id' => 23,
                'nom' => 'Black',
                'prenom' => 'Shane',
                'dateNaiss' => '1961-12-16',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Shane_Black_by_Gage_Skidmore.jpg/800px-Shane_Black_by_Gage_Skidmore.jpg',
            ],
            [
                'id' => 24,
                'nom' => 'Russo',
                'prenom' => 'Anthony',
                'dateNaiss' => '1970-02-03',
                'sexe' => 'M',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BMTc2NjM5MTM0Ml5BMl5BanBnXkFtZTgwMTY3ODczNjM@._V1_.jpg',
            ],

            // Producteur
            [ 
                'id' => 25,
                'nom' => 'Feige',
                'prenom' => 'Kevin',
                'dateNaiss' => '1973-06-02',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Kevin_Feige_%2848462887397%29_%28cropped%29.jpg/800px-Kevin_Feige_%2848462887397%29_%28cropped%29.jpg',
            ],
            [ 
                'id' => 26,
                'nom' => 'Branagh',
                'prenom' => 'Kenneth',
                'dateNaiss' => '1960-12-10',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/KennethBranaghApr2011.jpg/800px-KennethBranaghApr2011.jpg',
            ],
            [ 
                'id' => 27,
                'nom' => 'Favreau',
                'prenom' => 'Jon',
                'dateNaiss' => '1966-10-19',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Jon_Favreau_2016.jpeg/800px-Jon_Favreau_2016.jpeg',
            ],
            [ 
                'id' => 28,
                'nom' => 'Pascal',
                'prenom' => 'Amy',
                'dateNaiss' => '1958-03-25',
                'sexe' => 'F',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BMjMwMTA4MjMwNV5BMl5BanBnXkFtZTgwMDM5ODY2MzE@._V1_.jpg',
            ],
            [ 
                'id' => 29,
                'nom' => 'Eichinger',
                'prenom' => 'Bernd',
                'dateNaiss' => '1949-04-11',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/8/8d/Eichinger_Bernd_%28cropped%29.jpg',
            ],             
        ]);
    }
}
