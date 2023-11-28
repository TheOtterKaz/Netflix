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
    //? Acteurs
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
                'nom' => 'Cumberbatch',
                'prenom' => 'Benedict',
                'dateNaiss' => '1976-07-19',
                'sexe' => 'M',
                'imagePers' => 'https://image.tmdb.org/t/p/original/6g6hInkWkpw6emVZgUBCxui95D9.jpg',
            ],

            [
                'id' => 7,
                'nom' => 'Holland',
                'prenom' => 'Tom',
                'dateNaiss' => '1996-06-01',
                'sexe' => 'M',
                'imagePers' => 'https://i.pinimg.com/originals/0a/95/bf/0a95bf904b32195f97c27ad8d20a1590.jpg',
            ],

            [
                'id' => 8,
                'nom' => 'Boseman',
                'prenom' => 'Chadwick',
                'dateNaiss' => '1976-11-29',
                'sexe' => 'M',
                'imagePers' => 'https://th.bing.com/th/id/R.044f54d1cba7dec97309e0ef5033b479?rik=9wOJ%2fRURiCSe8w&pid=ImgRaw&r=0',
            ],
            
            [
                'id' => 9,
                'nom' => 'L. Jackson',
                'prenom' => 'Samuel',
                'dateNaiss' => '1948-12-21',
                'sexe' => 'M',
                'imagePers' => 'https://th.bing.com/th/id/R.9b333c95c0cae0ef7d89ce99227123ae?rik=EZUS%2blZ0PQLIIw&pid=ImgRaw&r=0',
            ],

            [
                'id' => 10,
                'nom' => 'Levi',
                'prenom' => 'Zachary',
                'dateNaiss' => '1980-09-29',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/b/bc/Zachary_Levi_by_Gage_Skidmore_4.jpg',
            ],

            [
                'id' => 11,
                'nom' => 'Maridueña',
                'prenom' => 'Xolo',
                'dateNaiss' => '2001-06-09',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/0/0e/Xolo_maiduena_3.jpg',
            ],

            [
                'id' => 12,
                'nom' => 'Johnson',
                'prenom' => 'Dwayne',
                'dateNaiss' => '1972-05-02',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/1/1f/Dwayne_Johnson_2014_%28cropped%29.jpg',
            ],

            [
                'id' => 13,
                'nom' => 'Affleck',
                'prenom' => 'Ben',
                'dateNaiss' => '1972-08-15',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/7/70/Ben_Affleck_by_Gage_Skidmore_3.jpg',
            ],

            [
                'id' => 14,
                'nom' => 'Phoenix',
                'prenom' => 'Joaquin',
                'dateNaiss' => '1974-10-28',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/0/06/Joaquin_Phoenix-2196_%28cropped%29.jpg',
            ],

            [
                'id' => 15,
                'nom' => 'Gadot',
                'prenom' => 'Gal',
                'dateNaiss' => '1985-04-30',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/5/5b/Gal_Gadot_cropped_lighting_corrected_2b.jpg',
            ],

            [
                'id' => 16,
                'nom' => 'Bale',
                'prenom' => 'Christian',
                'dateNaiss' => '1974-01-30',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/9/94/MJK_35690_Christian_Bale_%28Vice%2C_Berlinale_2019%29.jpg',
            ],

            [
                'id' => 17,
                'nom' => 'Reeves',
                'prenom' => 'Keanu',
                'dateNaiss' => '1964-09-02',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/9/90/Keanu_Reeves_%28crop_and_levels%29_%28cropped%29.jpg',
            ],

            [
                'id' => 18,
                'nom' => 'Lewis',
                'prenom' => 'Leah',
                'dateNaiss' => '1996-12-06',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/0/05/Leah_Lewis_2023_02.jpg',
            ],

            [
                'id' => 19,
                'nom' => 'Oh',
                'prenom' => 'Sandra',
                'dateNaiss' => '1971-07-20',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Sandra_Oh_2011.jpg',
            ],

            [
                'id' => 20,
                'nom' => 'Poehler',
                'prenom' => 'Amy',
                'dateNaiss' => '',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/0/00/Amy_Poehler_2013.jpg',
            ],

            [
                'id' => 21,
                'nom' => 'Macdonald',
                'prenom' => 'Kelly',
                'dateNaiss' => '1976-02-23',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Kelly_Macdonald_at_Brave_premiere_%28cropped%29.jpg',
            ],

            [
                'id' => 22,
                'nom' => 'Plummer',
                'prenom' => 'Christopher',
                'dateNaiss' => '1929-12-13',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/f/fd/Christopher_Plummer_2014.jpg',
            ],

            [
                'id' => 23,
                'nom' => 'Vowell',
                'prenom' => 'Sarah',
                'dateNaiss' => '1969-12-27',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/d/d8/Sarah_Vowell.jpg',
            ],

            [
                'id' => 24,
                'nom' => 'Brooks',
                'prenom' => 'Albert',
                'dateNaiss' => '1947-07-22',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/5/52/Albert_Brooks_at_%27Drive%27_premiere_TIFF_9.10.11.jpg',
            ],

            [
                'id' => 25,
                'nom' => 'Goodman',
                'prenom' => 'John',
                'dateNaiss' => '1952-06-20',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/John_Goodman_by_Gage_Skidmore.jpg',
            ],

            [
                'id' => 26,
                'nom' => 'Hanks',
                'prenom' => 'Tom',
                'dateNaiss' => '1956-07-09',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Tom_Hanks_TIFF_2019.jpg',
            ],

            [
                'id' => 27,
                'nom' => 'DeBose',
                'prenom' => 'Ariana',
                'dateNaiss' => '1991-01-25',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/0/0a/Ariana_DeBose_for_Bibhu_Mohapatra%2C_September_2020.png',
            ],

            [
                'id' => 28,
                'nom' => 'Bailey',
                'prenom' => 'Halle',
                'dateNaiss' => '2000-03-27',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/d/d0/Halle_Bailey_in_2023.jpg',
            ],

            [
                'id' => 29,
                'nom' => 'Samberg',
                'prenom' => 'Andy',
                'dateNaiss' => '1978-08-18',
                'sexe' => 'M',
                'imagePers' => 'https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/484313_v9_bb.jpg',
            ],

            [
                'id' => 30,
                'nom' => 'Beatriz',
                'prenom' => 'Stephanie',
                'dateNaiss' => '1981-02-10',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Stephanie_Beatriz_by_Gage_Skidmore.jpg',
            ],

            [
                'id' => 31,
                'nom' => 'Tran',
                'prenom' => 'Kelly Marie',
                'dateNaiss' => '1989-01-17',
                'sexe' => 'F',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BMTA4ODE1OTMyNDBeQTJeQWpwZ15BbWU4MDU5NzIyMDIy._V1_.jpg',
            ],

            [
                'id' => 32,
                'nom' => 'Glover',
                'prenom' => 'Donald',
                'dateNaiss' => '1983-09-25',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/2/2a/Donald_Glover_TIFF_2015.jpg',
            ],

            [
                'id' => 33,
                'nom' => 'C. Reily',
                'prenom' => 'John',
                'dateNaiss' => '1965-05-24',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/c/ce/JohnCReillyJune09.jpg',
            ],

            [
                'id' => 34,
                'nom' => 'Goodwin',
                'prenom' => 'Ginnifer',
                'dateNaiss' => '1978-05-22',
                'sexe' => 'F',
                'imagePers' => 'https://static.wikia.nocookie.net/disney/images/0/01/Ginnifer_Goodwin.jpg/revision/latest?cb=20190523223718',
            ],
    
    //? Réalisateurs
            [
                'id' => 35,
                'nom' => 'Gunn',
                'prenom' => 'James',
                'dateNaiss' => '1966-08-05',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/James_Gunn_%2828557194032%29_%28cropped%29.jpg/800px-James_Gunn_%2828557194032%29_%28cropped%29.jpg',
            ],
            
            [
                'id' => 36,
                'nom' => 'Waititi',
                'prenom' => 'Taika',
                'dateNaiss' => '1975-08-16',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Taika_Waititi_by_Gage_Skidmore_2.jpg/800px-Taika_Waititi_by_Gage_Skidmore_2.jpg',
            ],

            [
                'id' => 37,
                'nom' => 'Russo',
                'prenom' => 'Anthony',
                'dateNaiss' => '1970-02-03',
                'sexe' => 'M',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BMTc2NjM5MTM0Ml5BMl5BanBnXkFtZTgwMTY3ODczNjM@._V1_.jpg',
            ],

            [ 
                'id' => 38,
                'nom' => 'Favreau',
                'prenom' => 'Jon',
                'dateNaiss' => '1966-10-19',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Jon_Favreau_2016.jpeg/800px-Jon_Favreau_2016.jpeg',
            ],

            [
                'id' => 39,
                'nom' => 'Watts',
                'prenom' => 'Jon',
                'dateNaiss' => '1981-06-28',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Jon_Watts_by_Gage_Skidmore_2.jpg/800px-Jon_Watts_by_Gage_Skidmore_2.jpg',
            ],

            [
                'id' => 40,
                'nom' => 'Raimi',
                'prenom' => 'Sam',
                'dateNaiss' => '1959-10-23',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sam_Raimi_by_Gage_Skidmore_2.jpg/800px-Sam_Raimi_by_Gage_Skidmore_2.jpg',
            ],

            [
                'id' => 41,
                'nom' => 'Shortland',
                'prenom' => 'Cate',
                'dateNaiss' => '1958-08-10',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/5/55/Cate_Shortland_by_Gage_Skidmore_%28cropped%29.jpg',
            ],

            [
                'id' => 42,
                'nom' => 'Coogler',
                'prenom' => 'Ryan',
                'dateNaiss' => '1986-05-23',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Ryan_Coogler_%2836203771036%29_2.jpg/800px-Ryan_Coogler_%2836203771036%29_2.jpg',
            ],

            [
                'id' => 43,
                'nom' => 'F. Sandberg',
                'prenom' => 'David',
                'dateNaiss' => '1981-01-21',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/David_F._Sandberg_by_Gage_Skidmore_3.jpg/220px-David_F._Sandberg_by_Gage_Skidmore_3.jpg',
            ],

            [
                'id' => 44,
                'nom' => 'Soto',
                'prenom' => 'Angel Manuel',
                'dateNaiss' => '1983-01-28',
                'sexe' => 'M',
                'imagePers' => 'https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/903929_v9_aa.jpg',
            ],

            [
                'id' => 45,
                'nom' => 'Collet-Serra',
                'prenom' => 'Jaume',
                'dateNaiss' => '1974-03-23',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Jaume_Collet-Serra_%28cropped%29.jpg/220px-Jaume_Collet-Serra_%28cropped%29.jpg',
            ],

            [
                'id' => 46,
                'nom' => 'Stern',
                'prenom' => 'Jared',
                'dateNaiss' => 'N/A',
                'sexe' => 'M',
                'imagePers' => 'https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/627293_v9_ba.jpg',
            ],

            [
                'id' => 47,
                'nom' => 'Snyder',
                'prenom' => 'Zack',
                'dateNaiss' => '1966-03-01',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/Zack_Snyder.jpg',
            ],

            [
                'id' => 48,
                'nom' => 'Phillips',
                'prenom' => 'Todd',
                'dateNaiss' => '1970-12-20',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Todd_Phillips_%2829486703114%29.jpg/220px-Todd_Phillips_%2829486703114%29.jpg',
            ],

            [
                'id' => 49,
                'nom' => 'Jenkins',
                'prenom' => 'Patty',
                'dateNaiss' => '1971-07-24',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/d/d8/Patty_Jenkins_2018_Comic-Con.jpg',
            ],

            [
                'id' => 50,
                'nom' => 'Nolan',
                'prenom' => 'Christopher',
                'dateNaiss' => '1970-07-30',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/9/95/Christopher_Nolan_Cannes_2018.jpg',
            ],

            [
                'id' => 51,
                'nom' => 'Lawrence',
                'prenom' => 'Francis',
                'dateNaiss' => '1971-03-26',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Francis_Lawrence_by_Gage_Skidmore_2.jpg',
            ],

            [
                'id' => 52,
                'nom' => 'Sohn',
                'prenom' => 'Peter',
                'dateNaiss' => '1977-10-18',
                'sexe' => 'M',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BZjU0NDljODMtY2JhYS00ZWYwLWI1NzMtYWM2ZTg5YmM5MWNkXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg',
            ],

            [
                'id' => 53,
                'nom' => 'Shi',
                'prenom' => 'Domee',
                'dateNaiss' => '1989-09-08',
                'sexe' => 'F',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BNjczMzI5OTQ0OF5BMl5BanBnXkFtZTgwNTIwODU4NjM@._V1_.jpg',
            ],

            [
                'id' => 54,
                'nom' => 'Docter',
                'prenom' => 'Pete',
                'dateNaiss' => '1968-10-09',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/f/fd/Pete_Docter_cropped_2009.jpg',
            ],

            [
                'id' => 55,
                'nom' => 'Andrews',
                'prenom' => 'Mark',
                'dateNaiss' => '1968-09-12',
                'sexe' => 'M',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BMTc5Nzk4ODQzOF5BMl5BanBnXkFtZTcwMTg4Mjc5Nw@@._V1_FMjpg_UX1000_.jpg',
            ],

            [
                'id' => 56,
                'nom' => 'Bird',
                'prenom' => 'Brad',
                'dateNaiss' => '1957-09-15',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/b/b6/Brad_Bird_2018.jpg',
            ],

            [
                'id' => 57,
                'nom' => 'Stanton',
                'prenom' => 'Andrew',
                'dateNaiss' => '1965-12-03',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/5/52/Andrew_Stanton_cropped_2009.jpg',
            ],

            [
                'id' => 58,
                'nom' => 'Lasseter',
                'prenom' => 'John',
                'dateNaiss' => '1957-01-12',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/a/a0/John_Lasseter_2002.jpg',
            ],

            [
                'id' => 59,
                'nom' => 'Buck',
                'prenom' => 'Chris',
                'dateNaiss' => '1958-02-24',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/Frozenfeverdirectors_%28cropped%29.JPG',
            ],

            [
                'id' => 60,
                'nom' => 'Marshall',
                'prenom' => 'Rob',
                'dateNaiss' => '1960-10-17',
                'sexe' => 'M',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BMTUwMjAxNTE2MF5BMl5BanBnXkFtZTYwMjA0MTQ1._V1_FMjpg_UX1000_.jpg',
            ],

            [
                'id' => 61,
                'nom' => 'Schaffer',
                'prenom' => 'Akiva',
                'dateNaiss' => '1977-12-01',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/6/6b/Akiva_Schaffer_by_Gage_Skidmore.jpg',
            ],

            [
                'id' => 62,
                'nom' => 'Howard',
                'prenom' => 'Byron',
                'dateNaiss' => '1968-05-10',
                'sexe' => 'M',
                'imagePers' => 'https://static.wikia.nocookie.net/disney/images/9/99/Byron_Howard.jpg/revision/latest?cb=20180816231706',
            ],

            [
                'id' => 63,
                'nom' => 'Hall',
                'prenom' => 'Don',
                'dateNaiss' => '1969-03-08',
                'sexe' => 'M',
                'imagePers' => 'https://static.wikia.nocookie.net/walt-disney-animation-studios/images/1/1b/B97A084E-E313-4366-A7FD-D0BD853ECCE9.jpg/revision/latest?cb=20211001040831',
            ],

            [
                'id' => 64,
                'nom' => 'Moore',
                'prenom' => 'Rich',
                'dateNaiss' => '1963-05-10',
                'sexe' => 'M',
                'imagePers' => 'https://static.wikia.nocookie.net/disney/images/1/19/Rich_Moore.jpg/revision/latest?cb=20180824205334',
            ],

    //? Producteur
            [ 
                'id' => 65,
                'nom' => 'Feige',
                'prenom' => 'Kevin',
                'dateNaiss' => '1973-06-02',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Kevin_Feige_%2848462887397%29_%28cropped%29.jpg/800px-Kevin_Feige_%2848462887397%29_%28cropped%29.jpg',
            ],

            [ 
                'id' => 66,
                'nom' => 'Safra',
                'prenom' => 'Peter',
                'dateNaiss' => '1965-11-22',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PETER_SAFRAN_01.jpg/260px-PETER_SAFRAN_01.jpg',
            ],

            [ 
                'id' => 67,
                'nom' => 'Rickard',
                'prenom' => 'John',
                'dateNaiss' => '1977-11-02',
                'sexe' => 'M',
                'imagePers' => 'https://static.wikia.nocookie.net/dccu/images/8/80/John_Rickard.jpg/revision/latest?cb=20230929210914',
            ],

            [ 
                'id' => 68,
                'nom' => 'Flynn',
                'prenom' => 'Beau',
                'dateNaiss' => '1970-03-23',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Beau_Flynn_Portrait.png/220px-Beau_Flynn_Portrait.png',
            ],

            [ 
                'id' => 69,
                'nom' => 'Garcia',
                'prenom' => 'Dany',
                'dateNaiss' => '1968-11-29',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Dany_Garcia_2020.jpg/260px-Dany_Garcia_2020.jpg',
            ],

            [ 
                'id' => 70,
                'nom' => 'Roven',
                'prenom' => 'Charles',
                'dateNaiss' => '1949-08-02',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Charles_Roven_%28cropped%29.JPG/260px-Charles_Roven_%28cropped%29.JPG',
            ],

            [ 
                'id' => 71,
                'nom' => 'Cooper',
                'prenom' => 'Bradley',
                'dateNaiss' => '1975-01-05',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Bradley_Cooper_avp_2014_2.jpg/240px-Bradley_Cooper_avp_2014_2.jpg',
            ],

            [ 
                'id' => 72,
                'nom' => 'di Bonaventura',
                'prenom' => 'Lorenzo',
                'dateNaiss' => '1957-01-13',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/8/87/Lorenzo_di_Bonaventura_by_Gage_Skidmore.jpg',
            ],

            [ 
                'id' => 73,
                'nom' => 'Ream',
                'prenom' => 'Denise',
                'dateNaiss' => '1965-09-26',
                'sexe' => 'F',
                'imagePers' => 'https://images.mubicdn.net/images/cast_member/166572/cache-368977-1536160574/image-w856.jpg?size=800x',
            ],

            [ 
                'id' => 74,
                'nom' => 'Collins',
                'prenom' => 'Lindsay',
                'dateNaiss' => 'N/A',
                'sexe' => 'F',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BMjI2Mzk3NzYwNV5BMl5BanBnXkFtZTcwNzgwMzMzMw@@._V1_.jpg',
            ],

            [ 
                'id' => 75,
                'nom' => 'Rivera',
                'prenom' => 'Jonas',
                'dateNaiss' => '1971-05-02',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Annecy_Festival_2019%2C_screening_event_Toy_Story_4_-_Jonas_Rivera.jpg',
            ],

            [ 
                'id' => 76,
                'nom' => 'Jobs',
                'prenom' => 'Steve',
                'dateNaiss' => '1955-02-24',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/f/f5/Steve_Jobs_Headshot_2010-CROP2.jpg',
            ],

            [ 
                'id' => 77,
                'nom' => 'Del Vecho',
                'prenom' => 'Peter',
                'dateNaiss' => '1958-04-06',
                'sexe' => 'M',
                'imagePers' => 'https://static.wikia.nocookie.net/disney/images/f/f7/Peter_Del_Vecho.jpg/revision/latest?cb=20181108000003',
            ],

            [ 
                'id' => 78,
                'nom' => 'Miranda',
                'prenom' => 'Lin-Manuel',
                'dateNaiss' => '1980-01-16',
                'sexe' => 'M',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/a/a7/Lin-Manuel_Miranda_%26_James_McAvoy_%2848383681926%29_%28cropped%29.jpg',
            ],

            [ 
                'id' => 79,
                'nom' => 'Hoberman',
                'prenom' => 'David',
                'dateNaiss' => '1952-09-12',
                'sexe' => 'M',
                'imagePers' => 'https://static.wikia.nocookie.net/disney/images/f/fa/David_Hoberman.jpg/revision/latest?cb=20200328132739',
            ],

            [ 
                'id' => 80,
                'nom' => 'Lee',
                'prenom' => 'Jennifer',
                'dateNaiss' => '1971-10-22',
                'sexe' => 'F',
                'imagePers' => 'https://upload.wikimedia.org/wikipedia/commons/c/c0/Jennifer_Lee.JPG',
            ],

            [ 
                'id' => 81,
                'nom' => 'Silver',
                'prenom' => 'Jeffrey',
                'dateNaiss' => '1937-02-25',
                'sexe' => 'M',
                'imagePers' => 'https://m.media-amazon.com/images/M/MV5BMTg5MzQxMDEzNF5BMl5BanBnXkFtZTcwOTc5MjAzMQ@@._V1_FMjpg_UX1000_.jpg',
            ],

            [ 
                'id' => 82,
                'nom' => 'Johnston',
                'prenom' => 'Phil',
                'dateNaiss' => '1971-10-26',
                'sexe' => 'M',
                'imagePers' => 'https://static.wikia.nocookie.net/disney/images/d/d8/Phil_Johnston.jpg/revision/latest?cb=20211025234245',
            ],             
        ]);
    }
}
