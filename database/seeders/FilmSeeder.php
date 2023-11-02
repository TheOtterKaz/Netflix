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
        // Gardiens de la galaxie 1
            [                         
                'titre' => 'Les gardiens de la galaxie vol. 1',
                'resume' => 'Un groupe d\'aliens, derniers survivants de leur espèce, viennent sur Terre afin de protéger notre planète, menacée par une invasion d\'extraterrestres.',
                'brand' => 'Marvel',
                'cote' => '92',
                'rating' => '13+',
                'duree' => '121',
                'annee' => '2014',
                'realisateur_id' => 12,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/piiQ7CoPB7A/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=piiQ7CoPB7A',
            ],

        // Gardiens de la galaxie 2
            [                         
                'titre' => 'Les gardiens de la galaxie vol. 2',
                'resume' => 'Les Gardiens de la Galaxie doivent combattre pour rester unis alors qu\'ils découvrent les mystères de la filiation de Peter Quill. Les vieux ennemis vont devenir de nouveaux alliés et des personnages bien connus des fans de comics vont venir aider nos héros et continuer à étendre l\'univers Marvel.',
                'brand' => 'Marvel',
                'cote' => '85',
                'rating' => '13+',
                'duree' => '136',
                'annee' => '2017',
                'realisateur_id' => 12,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/rmCtoR074us/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=rmCtoR074us',
            ],

        // Gardiens de la galaxie 3
            [                         
                'titre' => 'Les gardiens de la galaxie vol. 3',
                'resume' => 'Notre bande de marginaux favorite a quelque peu changé. Peter Quill, qui pleure toujours la perte de Gamora, doit rassembler son équipe pour défendre l\’univers et protéger l\’un des siens. En cas d\’échec, cette mission pourrait bien marquer la fin des Gardiens tels que nous les connaissons.',
                'brand' => 'Marvel',
                'cote' => '82',
                'rating' => '13+',
                'duree' => '150',
                'annee' => '2023',
                'realisateur_id' => 12,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/NJLTTZOV_Lc/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=NJLTTZOV_Lc',
            ],

        // Thor : le monde des ténèbres 
            [                         
                'titre' => 'Thor : le monde des ténèbres',
                'resume' => 'Thor se bat pour restaurer l\’ordre dans le cosmos, mais une ancienne race, sous la conduite du terrible Malekith, un être assoiffé de vengeance, revient pour répandre les ténèbres.',
                'brand' => 'Marvel',
                'cote' => '67',
                'rating' => '13+',
                'duree' => '112',
                'annee' => '2013',
                'realisateur_id' => 13,
                'producteur_id' => 30,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/cWas-eJf6ao/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=cWas-eJf6ao',
            ],

        // Thor : Ragnarok
            [                         
                'titre' => 'Thor : Ragnarok',
                'resume' => 'Privé de son puissant marteau, Thor est retenu prisonnier sur une lointaine planète aux confins de l\’univers. Pour sauver Asgard, il va devoir lutter contre le temps afin d\’empêcher l\’impitoyable Hela d’accomplir le Ragnarök...',
                'brand' => 'Marvel',
                'cote' => '93',
                'rating' => '13+',
                'duree' => '130',
                'annee' => '2017',
                'realisateur_id' => 14,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/d5DsxIJcflw/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=d5DsxIJcflw',
            ],

        // Thor : amour et tonnerre
            [                         
                'titre' => 'Thor : Amour et tonnerre',
                'resume' => 'Alors que Thor est en pleine introspection et en quête de sérénité, sa retraite est interrompue par un tueur galactique connu sous le nom de Gorr, qui s\’est donné pour mission d\’exterminer tous les dieux.',
                'brand' => 'Marvel',
                'cote' => '63',
                'rating' => '13+',
                'duree' => '118',
                'annee' => '2022',
                'realisateur_id' => 14,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/0oVZBpqcd8A/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=0oVZBpqcd8A',
            ],

        // Avengers : Le film
            [                         
                'titre' => 'Avengers',
                'resume' => 'Lorsque Nick Fury, le directeur du S.H.I.E.L.D., l\'organisation qui préserve la paix au plan mondial, cherche à former une équipe de choc pour empêcher la destruction du monde, Iron Man, Hulk, Thor, Captain America, Hawkeye et Black Widow répondent présents.',
                'brand' => 'Marvel',
                'cote' => '91',
                'rating' => '13+',
                'duree' => '143',
                'annee' => '2012',
                'realisateur_id' => 15,
                'producteur_id' => 31,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/Zqtw9RaYJ_A/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=Zqtw9RaYJ_A',
            ],

        // Avengers : L'ère d'Ultron
            [                         
                'titre' => 'Avengers : L\'ère d\'Ultron',
                'resume' => 'Alors que Tony Stark tente de relancer un programme de maintien de la paix jusque-là suspendu, les choses tournent mal et les super-héros Iron Man, Captain America, Thor, Hulk, Black Widow et Hawkeye vont devoir à nouveau unir leurs forces pour combattre le plus puissant de leurs adversaires : Ultron..',
                'brand' => 'Marvel',
                'cote' => '76',
                'rating' => '13+',
                'duree' => '141',
                'annee' => '2015',
                'realisateur_id' => 15,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/veMTs1W9-Zk/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=veMTs1W9-Zk',
            ],

        // Avengers : La guerre de l'infini
            [                         
                'titre' => 'Avengers : La guerre de l\'infini',
                'resume' => 'Les Avengers et leurs alliés devront être prêts à tout sacrifier pour neutraliser le redoutable Thanos avant que son attaque éclair ne conduise à la destruction complète de l’univers. ',
                'brand' => 'Marvel',
                'cote' => '85',
                'rating' => '13+',
                'duree' => '149',
                'annee' => '2018',
                'realisateur_id' => 28,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/OxzKb4a1Qc4/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=OxzKb4a1Qc4',
            ],

        // Avengers : Endgame
            [                         
                'titre' => 'Avengers : Endgame',
                'resume' => 'Thanos ayant anéanti la moitié de l\’univers, les Avengers restants resserrent les rangs dans ce vingt-deuxième film des Studios Marvel, grande conclusion d\’un des chapitres de l\’Univers Cinématographique Marvel.',
                'brand' => 'Marvel',
                'cote' => '94',
                'rating' => '13+',
                'duree' => '181',
                'annee' => '2019',
                'realisateur_id' => 28,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/ePpJDKfRAyM/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=ePpJDKfRAyM',
            ],

        // Ironman 2
            [                         
                'titre' => 'Ironman 2',
                'resume' => 'Le monde sait que l\'inventeur Tony Stark et Iron Man ne font qu\'un. Malgré la pression du gouvernement, de la presse et du public pour qu\'il partage sa technologie avec l\'armée, Tony n\'est pas disposé à divulguer les secrets de son armure...',
                'brand' => 'Marvel',
                'cote' => '72',
                'rating' => '13+',
                'duree' => '124',
                'annee' => '2010',
                'realisateur_id' => 31,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/YX-l0UhXI7A/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=YX-l0UhXI7A',
            ],

        // Ironman 3
            [                         
                'titre' => 'Ironman 3',
                'resume' => 'Tony Stark, l\’industriel flamboyant qui est aussi Iron Man, est confronté cette fois à un ennemi qui va attaquer sur tous les fronts. Lorsque son univers personnel est détruit, Stark se lance dans une quête acharnée pour retrouver les coupables',
                'brand' => 'Marvel',
                'cote' => '79',
                'rating' => '13+',
                'duree' => '130',
                'annee' => '2013',
                'realisateur_id' => 27,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/j3HaZ5k4paM/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=j3HaZ5k4paM',
            ],

        // Captain America : Civil War
            [                         
                'titre' => 'Capitaine America : Civil War',
                'resume' => 'Steve Rogers est désormais à la tête des Avengers, dont la mission est de protéger l\’humanité. À la suite d\’une de leurs interventions qui a causé d\’importants dégâts collatéraux, le gouvernement décide de mettre en place un organisme de commandement et de supervision...',
                'brand' => 'Marvel',
                'cote' => '91',
                'rating' => '13+',
                'duree' => '147',
                'annee' => '2016',
                'realisateur_id' => 28,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/kZbUlebob_k/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=kZbUlebob_k',
            ],

        // Captain America : Le soldat de l'hiver
            [                         
                'titre' => 'Capitaine America : Le soldat de l\'hiver',
                'resume' => 'Après les événements cataclysmiques de New York, Steve Rogers aka Captain America vit tranquillement à Washington, D.C. et essaye de s\'adapter au monde moderne. Mais quand un collègue du S.H.I.E.L.D. est attaqué, Steve se retrouve impliqué dans un réseau d\'intrigues...',
                'brand' => 'Marvel',
                'cote' => '90',
                'rating' => '13+',
                'duree' => '136',
                'annee' => '2014',
                'realisateur_id' => 28,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/4mJXDvATi08/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=4mJXDvATi08',
            ],

        // Spiderman : Homecoming
            [                         
                'titre' => 'Spiderman : Homecoming',
                'resume' => 'Le jeune Peter Parker découvre peu à peu sa nouvelle identité, celle de Spider-Man, le super-héros lanceur de toile. Galvanisé par son expérience avec les Avengers, Peter rentre chez lui auprès de sa tante May, sous l\’œil attentif de son nouveau mentor, Tony Stark.',
                'brand' => 'Marvel',
                'cote' => '92',
                'rating' => '13+',
                'duree' => '133',
                'annee' => '2017',
                'realisateur_id' => 26,
                'producteur_id' => 32,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/RO014qcVkJc/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=RO014qcVkJc',
            ],

        // Spiderman : Far from home
            [                         
                'titre' => 'Spiderman : Far from home',
                'resume' => 'L\'araignée sympa du quartier décide de rejoindre ses meilleurs amis Ned, MJ, et le reste de la bande pour des vacances en Europe. Cependant, le projet de Peter de laisser son costume de super-héros derrière lui pendant quelques semaines est rapidement compromis quand il accepte à contrecoeur d\'aider Nick Fury à découvrir le mystère de plusieurs attaques de créatures, qui ravagent le continent !',
                'brand' => 'Marvel',
                'cote' => '90',
                'rating' => '13+',
                'duree' => '129',
                'annee' => '2019',
                'realisateur_id' => 26,
                'producteur_id' => 32,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/i3yw8WBPkFo/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=i3yw8WBPkFo',
            ],

        // Spiderman : No way home
            [                         
                'titre' => 'Spiderman : No way home',
                'resume' => 'Pour la première fois dans son histoire cinématographique, Spider-Man, le héros sympa du quartier est démasqué et ne peut désormais plus séparer sa vie normale de ses lourdes responsabilités de super-héros. Quand il demande de l\'aide à Doctor Strange, les enjeux deviennent encore plus dangereux...',
                'brand' => 'Marvel',
                'cote' => '93',
                'rating' => '13+',
                'duree' => '148',
                'annee' => '2021',
                'realisateur_id' => 26,
                'producteur_id' => 32,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/yT-h9lqRkYg/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=yT-h9lqRkYg',
            ],

        // Black widow
            [                         
                'titre' => 'Black widow',
                'resume' => 'Natasha Romanoff, alias Black Widow, voit resurgir la part la plus sombre de son passé pour faire face à une redoutable conspiration liée à sa vie d\’autrefois.',
                'brand' => 'Marvel',
                'cote' => '79',
                'rating' => '13+',
                'duree' => '134',
                'annee' => '2021',
                'realisateur_id' => 25,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/IUtPKFkfgHQ/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=IUtPKFkfgHQ',
            ],

        // Capitaine Marvel
            [                         
                'titre' => 'Capitaine Marvel',
                'resume' => 'Carol Danvers, une superhéroïne chargée de sauver la destinée de la Terre, au coeur d\’une guerre intergalactique d\'aliens.',
                'brand' => 'Marvel',
                'cote' => '79',
                'rating' => '13+',
                'duree' => '123',
                'annee' => '2019',
                'realisateur_id' => 24,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/5G58fKe0zwU/movieposter.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=5G58fKe0zwU',
            ],

        // Xmen
            [                         
                'titre' => 'Xmen',
                'resume' => 'De nos jours, les mutants coexistent avec les humains mais provoquent toujours un vif émoi au sein de la population qui les rejette. Une guerre éclate alors entre les X-Men, les mutants du Professeur X, et ceux de Magnéto, en guerre contre l\'humanité...',
                'brand' => 'Marvel',
                'cote' => '82',
                'rating' => '13+',
                'duree' => '104',
                'annee' => '2000',
                'realisateur_id' => 23,
                'producteur_id' => 33,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/RPKkrE-unbU/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=RPKkrE-unbU',
            ],

        // Xmen 2
            [                         
                'titre' => 'Xmen 2',
                'resume' => 'Les mutants font face à une nouvelle menace : alors que la polémique fait rage autour d\'un meurtre commis par l\'un d\'eux, le mouvement anti-mutants lance une attaque contre leur école. Magnéto se joint aux X-Men dans ce combat pour leur survie...',
                'brand' => 'Marvel',
                'cote' => '85',
                'rating' => '13+',
                'duree' => '134',
                'annee' => '2003',
                'realisateur_id' => 23,
                'producteur_id' => 33,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/Zh4u56JrMQk/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=Zh4u56JrMQk',
            ],

        // Xmen : L'affrontement final
            [                         
                'titre' => 'Xmen : L\'affrontement final',
                'resume' => 'Un traitement permet aux mutants d\'échapper à ce qu\'ils sont. Ils ont le choix : conserver ce qui fait leur caractère unique mais leur vaut la méfiance de l\'humanité, ou bien abandonner leurs pouvoirs et devenir des humains à part entière.',
                'brand' => 'Marvel',
                'cote' => '57',
                'rating' => '13+',
                'duree' => '104',
                'annee' => '2006',
                'realisateur_id' => 22,
                'producteur_id' => 33,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/8cOvN-PoZfo/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=8cOvN-PoZfo',
            ],

        // Xmen : Days of the future past
            [                         
                'titre' => 'Xmen : Days of the future past',
                'resume' => 'Les X-Men envoient Wolverine dans le passé pour changer un événement historique majeur, qui pourrait impacter mondialement humains et mutants.',
                'brand' => 'Marvel',
                'cote' => '90',
                'rating' => '13+',
                'duree' => '132',
                'annee' => '2014',
                'realisateur_id' => 23,
                'producteur_id' => 34,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/DQBUW5bGeiI/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=DQBUW5bGeiI',
            ],

        // Wolverine : Le combat de l'immortel
            [                         
                'titre' => 'Wolverine : Le combat de l\'immortel',
                'resume' => 'Wolverine, l\’éternel guerrier marginal, se retrouve au Japon. Vulnérable pour la première fois et poussé au bout de ses limites physiques et émotionnelles, Wolverine affrontera non seulement l\’acier mortel du samouraï mais aussi les questions liées à sa propre immortalité.',
                'brand' => 'Marvel',
                'cote' => '71',
                'rating' => '13+',
                'duree' => '126',
                'annee' => '2013',
                'realisateur_id' => 21,
                'producteur_id' => 36,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi_webp/-Mb7ypsxzBs/movieposter_fr.webp',
                'lienFilm' => 'https://www.youtube.com/watch?v=-Mb7ypsxzBs',
            ],

        // Les 4 fantastiques
            [                         
                'titre' => 'Les 4 fantastiques',
                'resume' => 'À l\'issue d\'un voyage expérimental, quatre astronautes sont soumis à des radiations cosmiques et se transforment en supers-héros dotés de pouvoirs extraordinaires. Ils vont devoir unir leurs forces pour déjouer les plans du maléfique Fatalis',
                'brand' => 'Marvel',
                'cote' => '28',
                'rating' => '13+',
                'duree' => '105',
                'annee' => '2005',
                'realisateur_id' => 20,
                'producteur_id' => 35,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/2JoBvMSUkDw/movieposter_fr.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=2JoBvMSUkDw',
            ],

        // Ant-man
            [                         
                'titre' => 'Ant-man',
                'resume' => 'Scott Lang, cambrioleur de haut vol, va devoir apprendre à se comporter en héros et aider son mentor, le Dr Hank Pym, à protéger le secret de son spectaculaire costume d\’Ant-Man, afin d\’affronter une effroyable menace…',
                'brand' => 'Marvel',
                'cote' => '83',
                'rating' => '13+',
                'duree' => '117',
                'annee' => '2015',
                'realisateur_id' => 19,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/YJuROpaYSes/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=YJuROpaYSes',
            ],

        // Ant-man et la guêpe
            [                         
                'titre' => 'Ant-man et la guêpe',
                'resume' => 'Scott Lang a bien du mal à concilier sa vie de super-héros et ses responsabilités de père. Mais ses réflexions sur les conséquences de ses choix tournent court lorsque Hope van Dyne et le Dr Hank Pym lui confient une nouvelle mission urgente… Scott va devoir renfiler son costume et apprendre à se battre aux côtés de La Guêpe afin de faire la lumière sur des secrets enfouis de longue date…',
                'brand' => 'Marvel',
                'cote' => '87',
                'rating' => '13+',
                'duree' => '118',
                'annee' => '2018',
                'realisateur_id' => 19,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/RQn-Pqvnzc8/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=RQn-Pqvnzc8',
            ],

        // Ant-man et la guêpe : Quantumania
            [                         
                'titre' => 'Ant-man et la guêpe : Quantumania',
                'resume' => 'Les super-héros Ant-Man et la Guêpe vont explorer la dimension subatomique, interagir avec d\'étranges nouvelles créatures et se lancer dans une odyssée qui les poussera au-delà des limites de ce qu\'il pensait être possible.',
                'brand' => 'Marvel',
                'cote' => '46',
                'rating' => '13+',
                'duree' => '124',
                'annee' => '2023',
                'realisateur_id' => 19,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/donOYTzhjPc/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=donOYTzhjPc',
            ],

        // Doctor Strange
            [                         
                'titre' => 'Doctor Strange',
                'resume' => 'L\’histoire d’un neurochirurgien, le Dr Stephen Strange, qui, après avoir été victime d\’un horrible accident de la route, découvre des dimensions parallèles et un univers fantastique.',
                'brand' => 'Marvel',
                'cote' => '89',
                'rating' => '13+',
                'duree' => '115',
                'annee' => '2016',
                'realisateur_id' => 18,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/TM-E1RJQ6qA/movieposter_fr.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=TM-E1RJQ6qA',
            ],

        // Doctor Strange dans le multivers de la folie
            [                         
                'titre' => 'Doctor Strange dans le multivers de la folie',
                'resume' => 'L\'univers cinématographique Marvel déverrouille et repousse les limites du multivers encore plus loin. Voyagez dans l’inconnu avec Doctor Strange, qui avec l\’aide d\’anciens et de nouveaux alliés mystiques, traverse les réalités hallucinantes et dangereuses du multivers pour affronter un nouvel adversaire mystérieux.',
                'brand' => 'Marvel',
                'cote' => '73',
                'rating' => '13+',
                'duree' => '126',
                'annee' => '2022',
                'realisateur_id' => 17,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/kf2ew0x1HwI/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=kf2ew0x1HwI',
            ],

        // Black Panther
            [                         
                'titre' => 'Black Panther',
                'resume' => 'T\’Challa revient chez lui prendre sa place sur le trône du Wakanda, une nation africaine technologiquement très avancée. Mais lorsqu\’un vieil ennemi resurgit, le courage de T\’Challa est mis à rude épreuve, aussi bien en tant que souverain qu\’en tant que Black Panther.',
                'brand' => 'Marvel',
                'cote' => '96',
                'rating' => '13+',
                'duree' => '134',
                'annee' => '2018',
                'realisateur_id' => 16,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/QoTbGtV9Zpk/movieposter.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=QoTbGtV9Zpk',
            ],

        // Black Panther Wakanda forever
            [                         
                'titre' => 'Black Panther Wakanda forever',
                'resume' => 'La Reine Ramonda, Shuri, M\’Baku, Okoye et les Dora Milaje luttent pour protéger leur nation des ingérences d\’autres puissances mondiales après la mort du roi T\’Challa. Mais une terrible menace surgit d\’un royaume caché au plus profond des océans : Talokan.',
                'brand' => 'Marvel',
                'cote' => '83',
                'rating' => '13+',
                'duree' => '161',
                'annee' => '2022',
                'realisateur_id' => 16,
                'producteur_id' => 29,
                'type' => 'Action',
                'imageFilm' => 'https://i.ytimg.com/vi/8ZqmJAuS8ko/movieposter_fr-CA.jpg',
                'lienFilm' => 'https://www.youtube.com/watch?v=8ZqmJAuS8ko',
            ],  
        ]);
    }
}
