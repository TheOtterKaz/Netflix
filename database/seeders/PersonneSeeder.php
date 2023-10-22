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
    public function run()
    {
        DB::table('personnes')->insert([
            //? Spider-Man 
            //* Acteur
            [
                'nom' => 'Moore',
                'prenom' => 'Shameik',
                'dateNaiss' => '1995-05-04',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BMjAwNDU2OTc5M15BMl5BanBnXkFtZTgwOTk0ODMyNDE@._V1_.jpg',
            ],

            //* Realisateur
            [
                'nom' => 'E. Rodriguez',
                'prenom' => 'Octavio',
                'dateNaiss' => '1973-10-14',
                'imagePers' => 'https://th.bing.com/th/id/OIP.gAwZPIziBTBE-wGcIkecgAHaOG?pid=ImgDet&rs=1',
            ],

            //* Producteur
            [
                'nom' => 'Arad',
                'prenom' => 'Avi',
                'dateNaiss' => '1948-08-01',
                'imagePers' => 'https://th.bing.com/th/id/OIP.pmuLzADIFNQzwb2qkHcRMgHaLH?pid=ImgDet&rs=1',
            ],

            //? Super Mario Bros, le film
            //* Acteur
            [
                'nom' => 'Pratt',
                'prenom' => 'Chris',
                'dateNaiss' => '1979-06-21',
                'imagePers' => 'https://www.monstersandcritics.com/wp-content/uploads/2019/03/chris-pratt.jpg',
            ],

            //* Realisateur
            [
                'nom' => 'Horvath',
                'prenom' => 'Aaron',
                'dateNaiss' => '1975-06-09',
                'imagePers' => 'https://th.bing.com/th/id/OIP.q5OaZI0uly85ycmUo7HzzQAAAA?pid=ImgDet&rs=1',
            ],

            //* Producteur
            [
                'nom' => 'Miyamoto',
                'prenom' => 'Shigeru',
                'dateNaiss' => '1952-11-16',
                'imagePers' => 'https://th.bing.com/th/id/R.a5cb0d1e2eef6b9cbebb2f4b4b7663a0?rik=fFJYdcvqad7ETw&riu=http%3a%2f%2fimg2.wikia.nocookie.net%2f__cb20141013033032%2fssb%2fimages%2f5%2f57%2fMiyamoto1.jpg&ehk=AgbJU%2fDqlohm34mCsjPq%2fBFTHmS9jywTXh3rGVF7j8M%3d&risl=&pid=ImgRaw&r=0',
            ],

            //? Don't look up
            //* Acteur
            [
                'nom' => 'DiCaprio',
                'prenom' => 'Leonardo',
                'dateNaiss' => '1974-11-11',
                'imagePers' => 'https://cdn.britannica.com/65/227665-050-D74A477E/American-actor-Leonardo-DiCaprio-2016.jpg',
            ],

            //* Realisateur
            [
                'nom' => 'McKay',
                'prenom' => 'Adam',
                'dateNaiss' => '1968-04-17',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BZmQ2ZDNkMGYtOWUzNi00N2Q3LTk1MDItODFlNDJkMTZkMjFmXkEyXkFqcGdeQXVyMjMxNzg4Mjk@._V1_.jpg',
            ],

            //* Producteur 
            [
                'nom' => 'Messick',
                'prenom' => 'Kevin',
                'dateNaiss' => '1966-08-21',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BNWVlYzczNzEtNmU5ZS00YTdhLWIyYzAtNDFmYjU0NWE1ZmFiXkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_.jpg',
            ],

            //? Wonder woman 1984
            //* Acteur
            [
                'nom' => 'Gabot',
                'prenom' => 'Gal',
                'dateNaiss' => '1985-04-30',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BNzgxYTA2OTUtYmE0ZC00ZTc0LWJjY2QtOTIzMTJhNGUyZjBlXkEyXkFqcGdeQXVyMTg4NDI0NDM@._V1_FMjpg_UX1000_.jpg',
            ],

            //* Realisateur
            [
                'nom' => 'Jenkins',
                'prenom' => 'Patty',
                'dateNaiss' => '1971-07-24',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BMTg4NDA4NTQ5MF5BMl5BanBnXkFtZTgwOTA0Nzc0MzE@._V1_.jpg',
            ],

            //* Producteur 
            [
                'nom' => 'Geoff',
                'prenom' => 'Johns',
                'dateNaiss' => '1973-01-25',
                'imagePers' => 'https://static.dc.com/dc/files/default_images/Geoff-Johns_Talent_c2e22012_mj_1500_597910e7771fb8.23126772.jpg?w=1200',
            ],

            //? Inception
            //* Acteur
            [
                'nom' => 'Gordon-Levitt',
                'prenom' => 'Joseph',
                'dateNaiss' => '1981-02-17',
                'imagePers' => 'https://static.wikia.nocookie.net/batman/images/7/72/Joseph_Gordon_Levitt.jpg/revision/latest?cb=20111030010135',
            ],

            //* Realisateur
            [
                'nom' => 'Nolan',
                'prenom' => 'Christopher',
                'dateNaiss' => '1970-07-30',
                'imagePers' => 'https://people.com/thmb/7lgnSJi5gGLOIJsdj8P6BVxHDfY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(674x429:676x431)/christopher-nolan-dc23745902014fb6ae107bb65a10c384.jpg',
            ],

            //* Producteur
            [
                'nom' => 'Thomas',
                'prenom' => 'Emma',
                'dateNaiss' => '1968-07-31',
                'imagePers' => 'https://image.tmdb.org/t/p/w500/6GemtNCy856iLho6WRsFASxQTAp.jpg',
            ],

            //? Seigneur des anneaux
            //* Acteur
            [
                'nom' => 'McKellen',
                'prenom' => 'Ian',
                'dateNaiss' => '1939-05-25',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/SDCC13_-_Ian_McKellen.jpg/240px-SDCC13_-_Ian_McKellen.jpg',
            ],

            //* Realisateur
            [
                'nom' => 'Jackson',
                'prenom' => 'Peter',
                'dateNaiss' => '1961-10-31',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Peter_Jackson_SDCC_2014.jpg/220px-Peter_Jackson_SDCC_2014.jpg',
            ],

            //* Producteur 
            [
                'nom' => 'M. Osborne',
                'prenom' => 'Barrie',
                'dateNaiss' => '1944-02-07',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Barrie_Osborne_%28cropped%29.jpg/220px-Barrie_Osborne_%28cropped%29.jpg',
            ],

            //? Nerve
            //* Acteur
            [
                'nom' => 'Roberts',
                'prenom' => 'Emma',
                'dateNaiss' => '1991-02-10',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Emma_Robert_2016_Comic_Con.jpg/220px-Emma_Robert_2016_Comic_Con.jpg',
            ],

            //* Realisateur
            [
                'nom' => 'Joost',
                'prenom' => 'Henry',
                'dateNaiss' => '1982-10-30',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Henry_Joost_at_2016_San_Diego_Comic-Con_%28cropped%29.jpg/220px-Henry_Joost_at_2016_San_Diego_Comic-Con_%28cropped%29.jpg',
            ],

            //* Producteur 
            [
                'nom' => 'Katagas',
                'prenom' => 'Anthony',
                'dateNaiss' => '1971-01-28',
                'imagePers' => 'https://resizing.flixster.com/kiEYdHwnxKv-xYcLvjKf46QRzo4=/218x280/v2/https://flxt.tmsimg.com/assets/202323_v9_ba.jpg',
            ],

            //? Joker
            //* Acteur
            [
                'nom' => 'Phoenix',
                'prenom' => 'Joaquin',
                'dateNaiss' => '1974-10-28',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Joaquin_Phoenix-2196_%28cropped%29.jpg/220px-Joaquin_Phoenix-2196_%28cropped%29.jpg',
            ],

            //* Realisateur
            [
                'nom' => 'Phillips',
                'prenom' => 'Todd',
                'dateNaiss' => '1970-12-20',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Todd_Phillips_%2829486703114%29.jpg/220px-Todd_Phillips_%2829486703114%29.jpg',
            ],

            //* Producteur 
            [
                'nom' => 'Cooper',
                'prenom' => 'Bradley',
                'dateNaiss' => '1975-01-05',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Bradley_Cooper_avp_2014_2.jpg/240px-Bradley_Cooper_avp_2014_2.jpg',
            ],

            //? Ready player one
            //* Acteur
            [
                'nom' => 'Sheridan',
                'prenom' => 'Tye',
                'dateNaiss' => '1996-11-11',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Tye_Sheridan_by_Gage_Skidmore_%28cropped%29.jpg/220px-Tye_Sheridan_by_Gage_Skidmore_%28cropped%29.jpg',
            ],

            //* Realisateur
            [
                'nom' => 'Spielberg',
                'prenom' => 'Steven',
                'dateNaiss' => '1946-12-18',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/MKr25402_Steven_Spielberg_%28Berlinale_2023%29.jpg/260px-MKr25402_Steven_Spielberg_%28Berlinale_2023%29.jpg',
            ],

            //* Producteur 
            [
                'nom' => 'Farah',
                'prenom' => 'Dan',
                'dateNaiss' => '1979-10-28',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BNDY4ZDA2NGUtYzI3My00NmFiLTg2YzYtYzQxOTAwMTVkMGY2XkEyXkFqcGdeQXVyNTA5NjU5MzY@._V1_FMjpg_UX1000_.jpg',
            ],

            //? Star wars
            //* Acteur
            [
                'nom' => 'Fisher',
                'prenom' => 'Carrie',
                'dateNaiss' => '1956-10-21',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Carrie_Fisher_2013.jpg/220px-Carrie_Fisher_2013.jpg',
            ],

            //* Realisateur
            [
                'nom' => 'Lucas',
                'prenom' => 'George',
                'dateNaiss' => '1944-05-14',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/George_Lucas_cropped_2009.jpg/290px-George_Lucas_cropped_2009.jpg',
            ],

            //* Producteur 
            [
                'nom' => 'McCallum',
                'prenom' => 'Rick',
                'dateNaiss' => '1954-08-22',
                'imagePers' => 'https://www.hollywoodreporter.com/wp-content/uploads/2013/06/rick_mccallum.jpg',
            ],
        ]);
    }
}
