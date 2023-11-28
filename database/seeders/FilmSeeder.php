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
    //* Marvel        
        // 1. Gardiens de la galaxie
            [                         
                'titre' => 'Les gardiens de la galaxie vol. 1',
                'resume' => 'Un groupe d\'aliens, derniers survivants de leur espèce, viennent sur Terre afin de protéger notre planète, menacée par une invasion d\'extraterrestres.',
                'brand' => 'Marvel',
                'cote' => '92',
                'rating' => '13+',
                'duree' => '121',
                'annee' => '2014',
                'realisateur_id' => 35,
                'producteur_id' => 65,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/piiQ7CoPB7A/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=HbB1LC_QyK0',
            ],

        // 2. Thor : amour et tonnerre
            [                         
                'titre' => 'Thor : Amour et tonnerre',
                'resume' => 'Alors que Thor est en pleine introspection et en quête de sérénité, sa retraite est interrompue par un tueur galactique connu sous le nom de Gorr, qui s\'est donné pour mission d\'exterminer tous les dieux.',
                'brand' => 'Marvel',
                'cote' => '63',
                'rating' => '13+',
                'duree' => '118',
                'annee' => '2022',
                'realisateur_id' => 36,
                'producteur_id' => 65,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/0oVZBpqcd8A/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=0oVZBpqcd8A',
            ],

        // 3. Avengers : La guerre de l'infini
            [                         
                'titre' => 'Avengers : La guerre de l\'infini',
                'resume' => 'Les Avengers et leurs alliés devront être prêts à tout sacrifier pour neutraliser le redoutable Thanos avant que son attaque éclair ne conduise à la destruction complète de l\'univers. ',
                'brand' => 'Marvel',
                'cote' => '85',
                'rating' => '13+',
                'duree' => '149',
                'annee' => '2018',
                'realisateur_id' => 37,
                'producteur_id' => 65,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/OxzKb4a1Qc4/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=OxzKb4a1Qc4',
            ],

        // 4. Ironman 2
            [                         
                'titre' => 'Ironman 2',
                'resume' => 'Le monde sait que l\'inventeur Tony Stark et Iron Man ne font qu\'un. Malgré la pression du gouvernement, de la presse et du public pour qu\'il partage sa technologie avec l\'armée, Tony n\'est pas disposé à divulguer les secrets de son armure...',
                'brand' => 'Marvel',
                'cote' => '72',
                'rating' => '13+',
                'duree' => '124',
                'annee' => '2010',
                'realisateur_id' => 38,
                'producteur_id' => 65,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/YX-l0UhXI7A/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=YX-l0UhXI7A',
            ],

        // 5. Captain America : Civil War
            [                         
                'titre' => 'Capitaine America : Civil War',
                'resume' => 'Steve Rogers est désormais à la tête des Avengers, dont la mission est de protéger l\'humanité. À la suite d\'une de leurs interventions qui a causé d\'importants dégâts collatéraux, le gouvernement décide de mettre en place un organisme de commandement et de supervision...',
                'brand' => 'Marvel',
                'cote' => '91',
                'rating' => '13+',
                'duree' => '147',
                'annee' => '2016',
                'realisateur_id' => 37,
                'producteur_id' => 65,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/kZbUlebob_k/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=kZbUlebob_k',
            ],

        // 6. Spiderman : No way home
            [                         
                'titre' => 'Spiderman : No way home',
                'resume' => 'Pour la première fois dans son histoire cinématographique, Spider-Man, le héros sympa du quartier est démasqué et ne peut désormais plus séparer sa vie normale de ses lourdes responsabilités de super-héros. Quand il demande de l\'aide à Doctor Strange, les enjeux deviennent encore plus dangereux...',
                'brand' => 'Marvel',
                'cote' => '93',
                'rating' => '13+',
                'duree' => '148',
                'annee' => '2021',
                'realisateur_id' => 39,
                'producteur_id' => 65,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/yT-h9lqRkYg/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=yT-h9lqRkYg',
            ],

        // 7. Black widow
            [                         
                'titre' => 'Black widow',
                'resume' => 'Natasha Romanoff, alias Black Widow, voit resurgir la part la plus sombre de son passé pour faire face à une redoutable conspiration liée à sa vie d\'autrefois.',
                'brand' => 'Marvel',
                'cote' => '79',
                'rating' => '13+',
                'duree' => '134',
                'annee' => '2021',
                'realisateur_id' => 41,
                'producteur_id' => 65,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/IUtPKFkfgHQ/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=IUtPKFkfgHQ',
            ],
        
        // 8. Doctor Strange dans le multivers de la folie
            [                         
                'titre' => 'Doctor Strange dans le multivers de la folie',
                'resume' => 'L\'univers cinématographique Marvel déverrouille et repousse les limites du multivers encore plus loin. Voyagez dans l\'inconnu avec Doctor Strange, qui avec l\'aide d\'anciens et de nouveaux alliés mystiques, traverse les réalités hallucinantes et dangereuses du multivers pour affronter un nouvel adversaire mystérieux.',
                'brand' => 'Marvel',
                'cote' => '73',
                'rating' => '13+',
                'duree' => '126',
                'annee' => '2022',
                'realisateur_id' => 40,
                'producteur_id' => 65,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/kf2ew0x1HwI/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=kf2ew0x1HwI',
            ],

        // 9. Black Panther
            [                         
                'titre' => 'Black Panther',
                'resume' => 'T\'Challa revient chez lui prendre sa place sur le trône du Wakanda, une nation africaine technologiquement très avancée. Mais lorsqu\'un vieil ennemi resurgit, le courage de T\'Challa est mis à rude épreuve, aussi bien en tant que souverain qu\'en tant que Black Panther.',
                'brand' => 'Marvel',
                'cote' => '96',
                'rating' => '13+',
                'duree' => '134',
                'annee' => '2018',
                'realisateur_id' => 42,
                'producteur_id' => 65,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/QoTbGtV9Zpk/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=QoTbGtV9Zpk',
            ],

    //* DC 
            // 10. Shazam 
            [                         
                'titre' => 'Shazam! La rage des dieux',
                'resume' => 'Suite des aventures de Billy Batson, ado capable de devenir un super-héros adulte lorsqu\'il prononce le mot "Shazam !"',
                'brand' => 'DC',
                'cote' => '49',
                'rating' => '13+',
                'duree' => '131',
                'annee' => '2023',
                'realisateur_id' => 43,
                'producteur_id' => 66,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/zvoifHvzdVE/movieposter_fr-FR.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=zvoifHvzdVE',
            ],        

            // 11. Blue beetle 
            [                         
                'titre' => 'Blue beetle',
                'resume' => 'Jaime Reyes est un jeune plein d\'ambition. Alors qu\'il rentre de l\'université, le Scarabée, une ancienne relique d\'une biotechnologie extraterrestre choisit de faire de lui son hôte. Tout bascule alors pour Jaime qui devient le super-héros Blue Beetle…',
                'brand' => 'DC',
                'cote' => '78',
                'rating' => '13+',
                'duree' => '127',
                'annee' => '2023',
                'realisateur_id' => 44,
                'producteur_id' => 67,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/InnDaqHu790/movieposter_fr-FR.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=InnDaqHu790',
            ],   

            // 12. Black Adam 
            [                         
                'titre' => 'Black Adam',
                'resume' => 'Près de cinq millénaires après avoir reçu les super-pouvoirs des anciens dieux \– et avoir été emprisonné dans la foulée \–, Black Adam est libéré de sa tombe terrestre, prêt à exercer sa propre justice dans le monde moderne…',
                'brand' => 'DC',
                'cote' => '38',
                'rating' => '13+',
                'duree' => '124',
                'annee' => '2022',
                'realisateur_id' => 45,
                'producteur_id' => 68,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/0G8vSTFJQRc/movieposter_fr-FR.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=0G8vSTFJQRc',
            ],     

            // 13. Krypto 
            [                         
                'titre' => 'Krypto et les super-animaux',
                'resume' => 'Krypto, le super-chien de Superman, se trouve face à un défi immense : sauver son maître, enlevé par Lex Luthor et son maléfique cochon d\'inde Lulu. Pour cela, il devra faire équipe avec une bande d\'animaux au grand cœur mais plutôt maladroits.',
                'brand' => 'DC',
                'cote' => '72',
                'rating' => 'G',
                'duree' => '106',
                'annee' => '2022',
                'realisateur_id' => 46,
                'producteur_id' => 69,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/DQ60XY8BUFg/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=DQ60XY8BUFg',
            ],        
              
            // 14. Zack snyder's Justice league 
            [                         
                'titre' => 'Zack snyder\'s Justice league',
                'resume' => 'Bruce Wayne est déterminé à faire en sorte que le sacrifice ultime de Superman ne soit pas vain; pour cela, avec l\'aide de Diana Prince, il met en place un plan pour recruter une équipe de métahumains afin de protéger le monde d\'une menace apocalyptique imminente.',
                'brand' => 'DC',
                'cote' => '72',
                'rating' => '16+',
                'duree' => '242',
                'annee' => '2021',
                'realisateur_id' => 47,
                'producteur_id' => 70,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/s8R-bxwXUL8/movieposter_fr-FR.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=s8R-bxwXUL8',
            ],          

            // 15. Joker 
            [                         
                'titre' => 'Joker',
                'resume' => 'Le film, qui relate une histoire originale inédite sur grand écran, se focalise sur la figure emblématique de l\'ennemi juré de Batman. Il brosse le portrait d\'Arthur Fleck, un homme sans concession méprisé par la société.',
                'brand' => 'DC',
                'cote' => '69',
                'rating' => '16+',
                'duree' => '122',
                'annee' => '2019',
                'realisateur_id' => 48,
                'producteur_id' => 71,
                'type' => 'Thriller',
                'imageFilm' => 'https://i.ytimg.com/vi/t1xHORDrBig/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=t1xHORDrBig',
            ],          

            // 16. Wonder woman 
            [                         
                'titre' => 'Wonder woman',
                'resume' => 'Avant d\'être Wonder Woman, elle s\'appelait Diana, princesse des Amazones, entraînée pour être une guerrière impossible à conquérir. Elle est élevée sur une île isolée et paradisiaque, mais lorsqu\'un pilote américain s\'écrase sur leur rivage et annonce qu\'un conflit à grande échelle fait rage dans le monde, Diana quitte son foyer, convaincue qu\'elle doit arrêter cette menace.',
                'brand' => 'DC',
                'cote' => '93',
                'rating' => '13+',
                'duree' => '141',
                'annee' => '2017',
                'realisateur_id' => 49,
                'producteur_id' => 47,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/GgR25xRDj3k/movieposter_fr-FR.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=GgR25xRDj3k',
            ],          

            // 17. The dark knight 
            [                         
                'titre' => 'The dark knight',
                'resume' => 'Batman entreprend de démanteler les dernières organisations criminelles de Gotham. Mais il se heurte bientôt à un nouveau génie du crime qui répand la terreur et le chaos dans la ville : le Joker...',
                'brand' => 'DC',
                'cote' => '94',
                'rating' => '13+',
                'duree' => '152',
                'annee' => '2008',
                'realisateur_id' => 50,
                'producteur_id' => 70,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/BVITuSz390M/movieposter_fr-FR.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=BVITuSz390M',
            ],          

            // 18. Constantine 
            [                         
                'titre' => 'Constantine',
                'resume' => 'John Constantine, extralucide anticonformiste, qui a fait un aller-retour aux enfers, doit aider Katelin Dodson, une femme policier incrédule, à lever le voile sur le suicide mystérieux de sa soeur jumelle.',
                'brand' => 'DC',
                'cote' => '46',
                'rating' => '16+',
                'duree' => '121',
                'annee' => '2005',
                'realisateur_id' => 51,
                'producteur_id' => 72,
                'type' => 'Horreur',
                'imageFilm' => 'https://i.ytimg.com/vi/KnfvzwsPIOQ/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=KnfvzwsPIOQ',
            ],

    //* Pixar
            // 19. Élémentaire 
            [                         
                'titre' => 'Élémentaire',
                'resume' => 'Dans la ville d\'Element City, le feu, l\'eau, la terre et l\'air vivent dans la plus parfaite harmonie. C\'est ici que résident Flam, une jeune femme intrépide et vive d\'esprit, au caractère bien trempé, et Flack, un garçon sentimental et amusant, plutôt suiveur dans l\'âme.',
                'brand' => 'Pixar',
                'cote' => '74',
                'rating' => 'G',
                'duree' => '109',
                'annee' => '2023',
                'realisateur_id' => 52,
                'producteur_id' => 73,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/4LBA45xhIrM/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=4LBA45xhIrM',
            ],          

            // 20. Alerte rouge 
            [                         
                'titre' => 'Alerte rouge',
                'resume' => 'Meilin Lee est une jeune adolescente de 13 ans qui, chaque fois qu\'elle est débordée par ses émotions, se transforme en panda roux géant !',
                'brand' => 'Pixar',
                'cote' => '95',
                'rating' => 'G',
                'duree' => '99',
                'annee' => '2022',
                'realisateur_id' => 53,
                'producteur_id' => 74,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/CeSldJF9QxI/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=CeSldJF9QxI',
            ],          

            // 21. Sens dessus dessous 
            [                         
                'titre' => 'Sens dessus dessous',
                'resume' => 'Au Quartier Général, le centre de contrôle situé dans la tête de la petite Riley, 11 ans, cinq Émotions sont au travail. Lorsque la famille de Riley emménage dans une grande ville, avec tout ce que cela peut avoir d\'effrayant, les Émotions ont fort à faire pour guider la jeune fille durant cette difficile transition.',
                'brand' => 'Pixar',
                'cote' => '98',
                'rating' => 'G',
                'duree' => '94',
                'annee' => '2015',
                'realisateur_id' => 54,
                'producteur_id' => 75,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/K815y4vBxcM/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=K815y4vBxcM',
            ],          

            // 22. Brave
            [                         
                'titre' => 'Brave',
                'resume' => 'Merida, la fille du roi Fergus est bien décidée à suivre son propre chemin dans la vie. Elle défie une tradition millénaire sacrée aux yeux de trois seigneurs du royaume, et sans l\'avoir voulu, elle va déchaîner le chaos dans le royaume.',
                'brand' => 'Pixar',
                'cote' => '79',
                'rating' => 'G',
                'duree' => '93',
                'annee' => '2012',
                'realisateur_id' => 55,
                'producteur_id' => 58,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/3ikFehuo33I/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=3ikFehuo33I',
            ],          

            // 23. Là-haut
            [                         
                'titre' => 'Là-haut',
                'resume' => 'Carl Fredricksen, vendeur de ballons à la retraite, s\'envole vers le ciel en attachant des milliers de ballons à sa maison. Un jeune garçon nommé Russell devient un passager clandestin de son voyage.',
                'brand' => 'Pixar',
                'cote' => '98',
                'rating' => 'G',
                'duree' => '96',
                'annee' => '2009',
                'realisateur_id' => 54,
                'producteur_id' => 75,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/DwOh9kijL8o/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=DwOh9kijL8o',
            ],          

            // 24. Les Incroyable 
            [                         
                'titre' => 'Les Incroyable ',
                'resume' => 'Bob Paar était jadis un super-héros. Mais aujourd\'hui, Mr. Indestructible est expert en assurances. Il bondit sur l\'occasion lorsqu\'on l\'appelle pour une mission secrète. Mais derrière cette alléchante proposition se cache un génie malfaisant.',
                'brand' => 'Pixar',
                'cote' => '97',
                'rating' => 'G',
                'duree' => '115',
                'annee' => '2004',
                'realisateur_id' => 56,
                'producteur_id' => 58,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/kHLWbITeaJ0/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=kHLWbITeaJ0',
            ],          

            // 25. Trouver Nemo
            [                         
                'titre' => 'Trouver Nemo',
                'resume' => 'Nemo, un jeune poisson-clown, s\'égare de son récif de corail et se perd dans le vaste océan. Son père Marin part à sa recherche et affronte divers dangers pour le retrouver.',
                'brand' => 'Pixar',
                'cote' => '99',
                'rating' => 'G',
                'duree' => '101',
                'annee' => '2003',
                'realisateur_id' => 57,
                'producteur_id' => 58,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/TWms-KIaQCM/movieposter_fr.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=TWms-KIaQCM',
            ],          

            // 26. Monsters inc 
            [                         
                'titre' => 'Monsters inc',
                'resume' => 'Durant la nuit, de drôles de monstres terrifient les enfants et récoltent leurs cris pour en faire leur principale source d\'énergie. Mais Sulli, l\'un d\'entre eux, permet sans le vouloir à Bouh, une petite fille, de pénétrer dans leur monde.',
                'brand' => 'Pixar',
                'cote' => '96',
                'rating' => 'G',
                'duree' => '92',
                'annee' => '2001',
                'realisateur_id' => 54,
                'producteur_id' => 58,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/h_yM-hkxVeI/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=h_yM-hkxVeI',
            ],          

            // 27. Histoire de jouets
            [                         
                'titre' => 'Histoire de jouets',
                'resume' => 'Quand Andy quitte sa chambre, ses jouets se mettent à mener leur propre vie sous la houlette du cowboy Woody. Débarque alors Buzz l\'éclair, intrépide aventurier de l\'espace venu d\'une lointaine galaxie, qui va semer la zizanie dans ce petit monde.',
                'brand' => 'Pixar',
                'cote' => '100',
                'rating' => 'G',
                'duree' => '81',
                'annee' => '1995',
                'realisateur_id' => 58,
                'producteur_id' => 76,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/bB-XYeSFNEc/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=bB-XYeSFNEc',
            ],            

    //? Disney
            // 28. Le souhait
            [                         
                'titre' => 'Le souhait',
                'resume' => 'Asha, jeune fille de 17 ans à l\'esprit vif et dévouée à ses proches, vit à Rosas, un royaume où tous les souhaits peuvent littéralement s\'exaucer. Dans un moment de désespoir, elle adresse un vœu aux étoiles auquel va répondre une force cosmique : une petite boule d\'énergie infinie prénommée Star. ',
                'brand' => 'Disney',
                'cote' => '50',
                'rating' => 'G',
                'duree' => '92',
                'annee' => '2023',
                'realisateur_id' => 59,
                'producteur_id' => 77,
                'type' => 'Animation',
                'imageFilm' => 'https://upload.wikimedia.org/wikipedia/en/d/de/WishMoviePoster.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=oyRxxpD3yNw',
            ],          

            // 29. La petite sirène
            [                         
                'titre' => 'La petite sirène',
                'resume' => 'Ariel est une jeune sirène belle et fougueuse dotée d\'un tempérament d\'aventurière. Rebelle dans l\'âme, elle n\'a de cesse d\'être attirée par le monde qui existe par-delà les flots. Au détour de ses escapades à la surface, elle va tomber sous le charme du prince Eric.',
                'brand' => 'Disney',
                'cote' => '67',
                'rating' => 'G',
                'duree' => '135',
                'annee' => '2023',
                'realisateur_id' => 60,
                'producteur_id' => 78,
                'type' => 'Famille',
                'imageFilm' => 'https://i.ytimg.com/vi/ySDaz4C7GME/movieposter_fr.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=ySDaz4C7GME',
            ],          

            // 30. Tic et Tac, les rangers du risque : le film
            [                         
                'titre' => 'Tic et Tac, les rangers du risque : le film',
                'resume' => 'Depuis la déprogrammation de la série dont ils étaient les héros, leurs vies ont pris des directions opposées. Tic s\'est reconverti en représentant en assurances et Tac se produit dans des galas et conventions empreints de nostalgie. Lorsqu\'un de leur ancien partenaire d\'aventure disparaît, Tic et Tac n\'ont d\'autre solution que de renouer avec leur amitié passée et de reprendre leurs chapeaux de détectives pour partir à son secours...',
                'brand' => 'Disney',
                'cote' => '80',
                'rating' => 'G',
                'duree' => '97',
                'annee' => '2022',
                'realisateur_id' => 61,
                'producteur_id' => 79,
                'type' => 'Animation',
                'imageFilm' => 'https://upload.wikimedia.org/wikipedia/en/4/46/Chip_n_Dale_Rescue_Rangers_Teaser_poster.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=F4Z0GHWHe60',
            ],          

            // 31. Encanto
            [                         
                'titre' => 'Encanto',
                'resume' => 'Dans un mystérieux endroit niché au cœur des montagnes de Colombie, la fantastique famille Madrigal habite une maison enchantée dans une cité pleine de vie, un endroit merveilleux appelé Encanto.',
                'brand' => 'Disney',
                'cote' => '92',
                'rating' => 'G',
                'duree' => '102',
                'annee' => '2021',
                'realisateur_id' => 62,
                'producteur_id' => 80,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/cXvDJ8s3-3U/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=cXvDJ8s3-3U',
            ],          

            // 32. Raya et le dernier dragon
            [                         
                'titre' => 'Raya et le dernier dragon',
                'resume' => 'Il y a de cela fort longtemps, au royaume imaginaire de Kumandra, humains et dragons vivaient en harmonie. Mais un jour, une force maléfique s\'abattit sur le royaume et les dragons se sacrifièrent pour sauver l\'humanité. Lorsque cette force réapparait cinq siècles plus tard, Raya se met en quête du légendaire dernier dragon pour restaurer l\'harmonie sur la terre au sein d\'un peuple désormais divisé.',
                'brand' => 'Disney',
                'cote' => '93',
                'rating' => 'G',
                'duree' => '107',
                'annee' => '2021',
                'realisateur_id' => 63,
                'producteur_id' => 80,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/RmPf28e1ab8/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=RmPf28e1ab8',
            ],          

            // 33. Le roi lion 
            [                         
                'titre' => 'Le roi lion ',
                'resume' => 'Au fond de la savane africaine, tous les animaux célèbrent la naissance de Simba, leur futur roi. Les mois passent. Simba idolâtre son père, le roi Mufasa, qui prend à cœur de lui faire comprendre les enjeux de sa royale destinée. Mais tout le monde ne semble pas de cet avis. Scar, le frère de Mufasa, l\'ancien héritier du trône, a ses propres plans...',
                'brand' => 'Disney',
                'cote' => '52',
                'rating' => 'G',
                'duree' => '118',
                'annee' => '2019',
                'realisateur_id' => 38,
                'producteur_id' => 81,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/l6nIh9ZsDaQ/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=l6nIh9ZsDaQ',
            ],          

            // 34. Ralph brise l'internet             
            [                         
                'titre' => 'Ralph brise l\'internet',
                'resume' => 'Ralph et son amie Vanellope von Schweetz vont prendre tous les risques en s\'aventurant dans l\'étrange univers d\'Internet à la recherche d\'une pièce de rechange pour réparer la borne de Sugar Rush, le jeu vidéo dans lequel vit Vanellope. Rapidement dépassés par le monde qui les entoure, ils vont devoir demander de l\'aide aux habitants d\'Internet...',
                'brand' => 'Disney',
                'cote' => '88',
                'rating' => 'G',
                'duree' => '110',
                'annee' => '2018',
                'realisateur_id' => 64,
                'producteur_id' => 82,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/8okJ8VYDVic/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=8okJ8VYDVic',
            ],          

            // 35. Moana 
            [                         
                'titre' => 'Moana',
                'resume' => 'C\'est depuis les îles océaniennes du Pacifique Sud que la jeune Moana, en navigatrice émérite, décide d\'entamer ses recherches pour retrouver une île aussi mystérieuse que fabuleuse. Au cours de cette traversée au long cours, elle va faire équipe avec son idole, le légendaire demi-dieu Maui.',
                'brand' => 'Disney',
                'cote' => '95',
                'rating' => 'G',
                'duree' => '107',
                'annee' => '2016',
                'realisateur_id' => 63,
                'producteur_id' => 58,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/A2u37cQ1BOA/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=A2u37cQ1BOA',
            ],          

            // 36. Zootopia 
            [                         
                'titre' => 'Zootopia',
                'resume' => 'Zootopia est une ville qui ne ressemble à aucune autre : seuls les animaux y habitent ! Lorsque l\'adorable lapine Judy Hopps fait son entrée dans la police, elle s\'attaque à une épineuse affaire, l\'obligeant à faire équipe avec Nick Wilde, un renard à la langue bien pendue et véritable virtuose de l\'arnaque…',
                'brand' => 'Disney',
                'cote' => '98',
                'rating' => 'G',
                'duree' => '108',
                'annee' => '2016',
                'realisateur_id' => 64,
                'producteur_id' => 58,
                'type' => 'Animation',
                'imageFilm' => 'https://i.ytimg.com/vi/MJg3dMJuXlY/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=MJg3dMJuXlY',
            ],           
        ]);
    }
}
