<?php
require 'class/Personne.php';
require 'class/Realisateur.php';
require 'class/Acteur.php';
require 'class/Genre.php';
require 'class/Film.php';
require 'class/Casting.php';
require 'class/Role.php';

/*
Qu'est ce require ou include en PHP?
- require est un appel à un fichier obligatoire pour permettre le fonctionne de la page (si un require n'est pas chargé, la page renverra une erreur fatale)
- include est un appel à un fichier qui permet d'être utiliser en cas de besoin (si un include n'est pas chargé, la page renverra un warning et continuera son exécution)
*/

/* Définition d'un objet :
Classe : 
- La classe permet de gérer différents etats et comportements (propriétés et méthodes)
- La classe sert à instancier un nouvel objet
- Principe d'ecapsulation (Visibilité : public, private, protected) avant la methode magique __construct
*/

/**
 * balise <pre> sert à formater le print_r en format code (pour meilleure visibilité)
 * echo "<pre>";
 * print_r($miserables);
 * echo "</pre>";
 */

//Les différents réalisateur de film
$real1 = new Realisateur("Ladjy", "Ly", "H", "03-01-1978"); //réalisateur du film "les misérables"
$real2 = new Realisateur("Darabont", "Frank", "H", "28-01-1959"); //réalisateur du film "ligne verte"
$real3 = new Realisateur("Fuqua", "Antoine", "H", "19-01-1966");  //réalisateur du film "
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

<body>
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
    <div class="container text-center">
        <div class="row">
            <div class="w-100"><br></div>
            <div class="col-12 col-sm-6 border border-primary">
                <?php echo $real4->afficherFilmographie(); ?>
            </div>
            <div class="col-12 col-sm-6 border border-primary">
                <?php echo $real3->afficherFilmographie(); ?>
            </div>
            <div class="w-100"><br></div>
            <div class="col-12 col-sm-6 border border-secondary">
                <?php echo $act9->afficherFilmographie(); ?>
            </div>
            <div class="col-12 col-sm-6 border border-secondary">
                <?php echo $act3->afficherFilmographie(); ?>
            </div>
            <div class="w-100"><br></div>
            <div class="col-12 col-sm-6 border border-success">
                <?php echo $role9->afficherActeurs(); ?>
            </div>
            <div class="col-12 col-sm-6 border border-success">
                <?php echo $role2->afficherActeurs(); ?>
            </div>
            <div class="w-100"><br></div>
            <div class="col-12 col-sm-6 border border-danger">
                <?php echo $genre7->afficherCinematographie(); ?>
            </div>
            <div class="col-12 col-sm-6 border border-danger">
                <?php echo $genre4->afficherCinematographie(); ?>
            </div>
            <div class="w-100"><br></div>
            <div class="col-12 col-sm-6 border border-warning">
                <?php echo $film5->afficherCasting(); ?>
            </div>
            <div class="col-12 col-sm-6 border border-warning">
                <?php echo $film2->afficherCasting(); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>