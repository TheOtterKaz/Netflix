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
                'type' => 'Animation',
                'imageFilm' => 'https://www.cinecroisiere.fr/i/films/595g.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=iZSRP2UYtO4',
            ],

            // Super mario bros
            [                         
                'titre' => 'Super Mario Bros, le film',
                'resume' => 'Alors qu\'ils tentent de réparer une canalisation souterraine, Mario et son frère Luigi, tous deux plombiers, se retrouvent plongés dans un nouvel univers féerique à travers un mystérieux conduit.',
                'brand' => 'Nintendo',
                'cote' => '59',
                'rating' => 'Général',
                'duree' => '92',
                'annee' => '2023',
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/Bx_-Fa622Js/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=Bx_-Fa622Js',
            ],

            // Don't look up
            [                         
                'titre' => 'Don\'t look up',
                'resume' => 'Deux piètres astronomes s\'embarquent dans une gigantesque tournée médiatique pour prévenir l\'humanité qu\'une comète se dirige vers la Terre et s\'apprête à la détruire.',
                'brand' => 'n/a',
                'cote' => '59',
                'rating' => '18+',
                'duree' => '143',
                'annee' => '2021',
                'type' => 'Comédie',
                'imageFilm' => 'https://upload.wikimedia.org/wikipedia/en/5/5c/Don%27t_Look_Up_2021_film.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=PLuRMtyoj1Q',
            ],

            // Wonder woman
            [                         
                'titre' => 'Wonder woman 1984',
                'resume' => 'Suite des aventures de Diana Prince, alias Wonder Woman, Amazone devenue une super-héroïne dans notre monde. Après la Première guerre mondiale, direction les années 80 ! Cette fois, Wonder Woman doit affronter deux nouveaux ennemis, particulièrement redoutables : Max Lord et Cheetah.',
                'brand' => 'Marvel',
                'cote' => '58',
                'rating' => 'Général',
                'duree' => '151',
                'annee' => '2020',
                'type' => 'Action, Aventure',
                'imageFilm' => 'https://i.ytimg.com/vi/ief7TbjhW80/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=ief7TbjhW80',
            ],

            // Inception
            [                         
                'titre' => 'Inception',
                'resume' => 'Au lieu de subtiliser un rêve, un voleur expérimenté et son équipe doivent faire l\'inverse : implanter une idée dans l\'esprit d\'un individu. S\'ils y parviennent, il pourrait s\'agir du crime parfait ...',
                'brand' => 'n/a',
                'cote' => '87',
                'rating' => 'Général',
                'duree' => '148',
                'annee' => '2010',               
                'type' => 'Science-Fiction',
                'imageFilm' => 'https://i.ytimg.com/vi/fVhKn6vmheQ/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=fVhKn6vmheQ',
            ],

            // Le seigneur des anneaux
            [                         
                'titre' => 'Le seigneur des anneaux : La communauté de l\'anneau',
                'resume' => 'Frodon le Hobbit hérite de l\'Anneau Unique, un instrument de pouvoir absolu qui permettrait à Sauron, le Seigneur des ténèbres, de régner sur la Terre du Milieu. Commence alors un vaste périple visant à la destruction de l\'objet.',
                'brand' => 'n/a',
                'cote' => '91',
                'rating' => 'Général',
                'duree' => '178',
                'annee' => '2001',
                'type' => 'Fantasie',
                'imageFilm' => 'https://i.ytimg.com/vi/R5S22HFuuWA/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=R5S22HFuuWA',
            ],

            // Nerve
            [                         
                'titre' => 'Nerve',
                'resume' => 'En participant à Nerve, un jeu qui diffuse en direct sur Internet des défis filmés, Vee et Ian décident de s\'associer pour relever des challenges de plus en plus risqués et gagner toujours plus d\'argent.',
                'brand' => 'n/a',
                'cote' => '67',
                'rating' => 'Général',
                'duree' => '96',
                'annee' => '2016',
                'type' => 'Thriller',
                'imageFilm' => 'https://i.ytimg.com/vi/O57t3qNKOiU/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=O57t3qNKOiU',
            ],

            // Joker
            [                         
                'titre' => 'Joker',
                'resume' => 'Le film, qui relate une histoire originale inédite sur grand écran, se focalise sur la figure emblématique de l\'ennemi juré de Batman. Il brosse le portrait d\'Arthur Fleck, un homme sans concession méprisé par la société.',
                'brand' => 'DC',
                'cote' => '69',
                'rating' => '13+',
                'duree' => '122',
                'annee' => '2019',
                'type' => 'Drame',
                'imageFilm' => 'https://i.ytimg.com/vi/t1xHORDrBig/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=t1xHORDrBig',
            ],

            // Ready player one
            [                         
                'titre' => 'Ready player one',
                'resume' => '2045. Le monde est au bord du chaos. Les êtres humains se réfugient dans l\'OASIS, univers virtuel mis au point par le brillant et excentrique James Halliday. Avant de disparaître, celui-ci a décidé de léguer son immense fortune à quiconque découvrira l\'œuf de Pâques numérique qu\'il a pris soin de dissimuler dans l\'OASIS.',
                'brand' => 'n/a',
                'cote' => '72',
                'rating' => 'Général',
                'duree' => '140',
                'annee' => '2018',
                'type' => 'Science-Fiction',
                'imageFilm' => 'https://i.ytimg.com/vi/YFpwe_ibBzA/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=YFpwe_ibBzA',
            ],

            // Star wars
            [                         
                'titre' => 'Star wars, Episode IV : Un nouvel espoir',
                'resume' => 'Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l\'Empire galactique et l\'Alliance rebelle.',
                'brand' => 'Star Wars',
                'cote' => '93',
                'rating' => 'Général',
                'duree' => '121',
                'annee' => '1977',
                'type' => 'Science-Fiction',
                'imageFilm' => 'https://i.ytimg.com/vi/_3FKPJ_88Io/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=_3FKPJ_88Io',
            ],   
        ]);
    }
}
