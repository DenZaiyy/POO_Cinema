<?php
require 'class/Personne.php';
require 'class/Realisateur.php';
require 'class/Acteur.php';
require 'class/Genre.php';
require 'class/Film.php';
require 'class/Casting.php';
require 'class/Role.php';

//Les différents réalisateur de film
$real1 = new Realisateur("Ladjy", "Ly", "H", "03-01-1978"); //réalisateur du film "Les Misérables"
$real2 = new Realisateur("Darabont", "Frank", "H", "28-01-1959"); //réalisateur du film "La Ligne verte"
$real3 = new Realisateur("Fuqua", "Antoine", "H", "19-01-1966");  //réalisateur du film "Un tueur pour cible", "Le Roi Arthur"
$real4 = new Realisateur("Burton", "Tim", "H", "25-08-1958");  //réalisateur du film "Batman(1989)", "Batman, le défi"
$real5 = new Realisateur("Nolan", "Christopher", "H", "30-07-1970");  //réalisateur du film "Batman begins"

//Les différents genre de film
$genre1 = new Genre("Drame");
$genre2 = new Genre("Fantastique");
$genre3 = new Genre("Policier");
$genre4 = new Genre("Action");
$genre5 = new Genre("Aventure");
$genre6 = new Genre("Historique");
$genre7 = new Genre("Super-héros");

//Les différents films
$film1 = new Film("Un tueur pour cible", "27-05-1998", 87, $real3, $genre4);
$film2 = new Film("Le Roi Arthur", "04-08-2004", 126, $real3, $genre4);
$film3 = new Film("La Ligne verte", "01-03-2000", 189, $real2, $genre2);
$film4 = new Film("Les Misérables", "20-11-2019", 105, $real1, $genre1);
$film5 = new Film("Batman", "13-09-1989", 125, $real4, $genre7);
$film6 = new Film("Batman, le défi", "15-07-1992", 126, $real4, $genre7);
$film7 = new Film("Batman begins", "15-06-2005", 140, $real5, $genre7);


//Les différents rôles joués
$role1 = new Role("John Lee");
$role2 = new Role("Stan Zedkov");
$role3 = new Role("le Roi Arthur");
$role4 = new Role("Lancelot");
$role5 = new Role("La jeune fille à l'arrêt de bus");
$role6 = new Role("La comissaire");
$role7 = new Role("John Coffey");
$role8 = new Role("Paul Edgecomb");
$role9 = new Role("Batman");
$role10 = new Role("Catwoman");

//Les différents acteurs pour les différents films
$act1 = new Acteur("Yun-Fat", "Chow", "H", "18-05-1955", $film1, $role1);
$act2 = new Acteur("Rooker", "Michael", "H", "06-04-1955", $film1, $role2);
$act3 = new Acteur("Owen", "Clive", "H", "03-10-1964", $film2, $role3);
$act4 = new Acteur("Gruffudd", "Ioan", "H", "06-10-1973", $film2, $role4);
$act5 = new Acteur("Lesaffre", "Sofia", "F", "01-04-1997", $film4, $role5);
$act6 = new Acteur("Balibar", "Jeanne", "H", "13-04-1968", $film4, $role6);
$act7 = new Acteur("Duncan", "Michael Clarke", "H", "10-12-1957", $film3, $role7);
$act8 = new Acteur("Hanks", "Tom", "H", "09-07-1956", $film3, $role8);
$act9 = new Acteur("Keaton", "Michael", "H", "05-09-1951", $film5, $role9);
$act10 = new Acteur("Bale", "Christian", "H", "30-01-1974", $film7, $role9);
$act11 = new Acteur("Pfeiffer", "Michelle", "F", "29-04-1958", $film5, $role10);

//Section casting
$cast1 = new Casting($film1, $act1, $role1);
$cast2 = new Casting($film1, $act2, $role2);
$cast3 = new Casting($film2, $act3, $role3);
$cast4 = new Casting($film2, $act4, $role4);
$cast5 = new Casting($film3, $act7, $role7);
$cast6 = new Casting($film3, $act8, $role8);
$cast7 = new Casting($film4, $act5, $role5);
$cast8 = new Casting($film4, $act6, $role6);
$cast9 = new Casting($film5, $act9, $role9);
$cast10 = new Casting($film6, $act9, $role9);
$cast11 = new Casting($film7, $act10, $role9);
$cast12 = new Casting($film5, $act11, $role10);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Cinéma</title>
</head>

<body class="bg-dark text-light">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        p {
            margin: 0;
            padding: 0;
        }
    </style>
    <div class="container w-50 p-3">
        <h2>Filmographie de Réalisateur</h2>
        <div class="accordion" id="accordionRealisateur">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingRealOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#RealOne" aria-expanded="false" aria-controls="RealOne">
                        Filmographie du réalisateur #<?php echo $real4->getPrenom() . " " . strtoupper($real4->getNom()); ?>
                    </button>
                </h2>
                <div id="RealOne" class="accordion-collapse collapse" aria-labelledby="headingRealOne" data-bs-parent="#accordionRealisateur">
                    <div class="accordion-body">
                        <?php echo $real4->afficherFilmographie(); ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingRealTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#RealTwo" aria-expanded="false" aria-controls="RealTwo">
                        Filmographie du réalisateur #<?php echo $real3->getPrenom() . " " . strtoupper($real3->getNom()); ?>
                    </button>
                </h2>
                <div id="RealTwo" class="accordion-collapse collapse" aria-labelledby="headingRealTwo" data-bs-parent="#accordionRealisateur">
                    <div class="accordion-body">
                        <?php echo $real3->afficherFilmographie(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100"><br></div>
    <div class="container w-50 p-3">
        <h2>Filmographie d'acteur</h2>
        <div class="accordion" id="accordionActeur">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingActeurOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ActeurOne" aria-expanded="false" aria-controls="ActeurOne">
                        Filmographie de l'acteur #<?php echo $act9->getPrenom() . " " . strtoupper($act9->getNom()); ?>
                    </button>
                </h2>
                <div id="ActeurOne" class="accordion-collapse collapse" aria-labelledby="headingActeurOne" data-bs-parent="#accordionActeur">
                    <div class="accordion-body">
                        <?php echo $act9->afficherFilmographie(); ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingActeurTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ActeurTwo" aria-expanded="false" aria-controls="ActeurTwo">
                        Filmographie de l'acteur #<?php echo $act3->getPrenom() . " " . strtoupper($act3->getNom()); ?>
                    </button>
                </h2>
                <div id="ActeurTwo" class="accordion-collapse collapse" aria-labelledby="headingActeurTwo" data-bs-parent="#accordionActeur">
                    <div class="accordion-body">
                        <?php echo $act3->afficherFilmographie(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100"><br></div>
    <div class="container w-50 p-3">
        <h2>Rôle jouer par acteur</h2>
        <div class="accordion" id="accordionRoleActeur">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingRoleActeurOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#RoleActeurOne" aria-expanded="false" aria-controls="RoleActeurOne">
                        Rôle #<?php echo $role9; ?> jouer par les acteurs
                    </button>
                </h2>
                <div id="RoleActeurOne" class="accordion-collapse collapse" aria-labelledby="headingRoleActeurOne" data-bs-parent="#accordionRoleActeur">
                    <div class="accordion-body">
                        <?php echo $role9->afficherActeurs(); ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingRoleActeurTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#RoleActeurTwo" aria-expanded="false" aria-controls="RoleActeurTwo">
                        Rôle #<?php echo $role2; ?> jouer par les acteurs
                    </button>
                </h2>
                <div id="RoleActeurTwo" class="accordion-collapse collapse" aria-labelledby="headingRoleActeurTwo" data-bs-parent="#accordionRoleActeur">
                    <div class="accordion-body">
                        <?php echo $role2->afficherActeurs(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100"><br></div>
    <div class="container w-50 p-3">
        <h2>Genre de film</h2>
        <div class="accordion" id="accordionGenre">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingGenreOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#GenreOne" aria-expanded="false" aria-controls="GenreOne">
                        Le genre #<?php echo $genre7; ?> est associé au film
                    </button>
                </h2>
                <div id="GenreOne" class="accordion-collapse collapse" aria-labelledby="headingGenreOne" data-bs-parent="#accordionGenre">
                    <div class="accordion-body">
                        <?php echo $genre7->afficherCinematographie(); ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingGenreTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#GenreTwo" aria-expanded="false" aria-controls="GenreTwo">
                        Le genre #<?php echo $genre4; ?> est associé au film
                    </button>
                </h2>
                <div id="GenreTwo" class="accordion-collapse collapse" aria-labelledby="headingGenreTwo" data-bs-parent="#accordionGenre">
                    <div class="accordion-body">
                        <?php echo $genre4->afficherCinematographie(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100"><br></div>
    <div class="container w-50 p-3">
        <h2>Casting de film</h2>
        <div class="accordion" id="accordionCasting">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingCastingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CastingOne" aria-expanded="false" aria-controls="CastingOne">
                        Casting du film #<?php echo $film5; ?>
                    </button>
                </h2>
                <div id="CastingOne" class="accordion-collapse collapse" aria-labelledby="headingCastingOne" data-bs-parent="#accordionCasting">
                    <div class="accordion-body">
                        <?php echo $film5->afficherCasting(); ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingCastingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CastingTwo" aria-expanded="false" aria-controls="CastingTwo">
                        Casting du film #<?php echo $film2; ?>
                    </button>
                </h2>
                <div id="CastingTwo" class="accordion-collapse collapse" aria-labelledby="headingCastingTwo" data-bs-parent="#accordionCasting">
                    <div class="accordion-body">
                        <?php echo $film2->afficherCasting(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>