<?php
require 'class/Personne.php';
require 'class/Realisateur.php';
require 'class/Acteur.php';
require 'class/Genre.php';
require 'class/Film.php';
require 'class/Casting.php';
require 'class/Role.php';

/**
 * ======================================================================
 * TODO Réussir à gérer le systeme d'affichage de film par "genre", "realisateur"
 * ======================================================================
 */

/**
 * balise <pre> sert à formater le print_r en format code (pour meilleure visibilité)
 * echo "<pre>";
 * print_r($miserables);
 * echo "</pre>";
 */

// $genres = [$drame, $fantastique, $policier, $action, $aventure];
// $roles = [$role1, $role2, $role3, $role4, $role5, $role6, $role7, $role8];

//Les différents réalisateur de film
$real1 = new Realisateur("Ladjy", "Ly", "H", "03-01-1978"); //réalisateur du film "les misérables"
$real2 = new Realisateur("Darabont", "Frank", "H", "28-01-1959"); //réalisateur du film "ligne verte"
$real3 = new Realisateur("Fuqua", "Antoine", "H", "19-01-1966");  //réalisateur du film "

//Les différents genre de film
$genre1 = new Genre("Drame");
$genre2 = new Genre("Fantastique");
$genre3 = new Genre("Policier");
$genre4 = new Genre("Action");
$genre5 = new Genre("Aventure");

//Les différents rôles joués
$role1 = new Role("John Lee");
$role2 = new Role("Stan Zedkov");
$role3 = new Role("le Roi Arthur");
$role4 = new Role("Lancelot");
$role5 = new Role("La jeune fille à l'arrêt de bus");
$role6 = new Role("La comissaire");
$role7 = new Role("John Coffey");
$role8 = new Role("Paul Edgecomb");

//Les différents films
$film1 = new Film("Un tueur pour cible", "1998", 87, $real3, $genre4);
$film2 = new Film("Le Roi Arthur", "2004", 126, $real3, $genre5);
$film3 = new Film("La Ligne verte", "01-03-2000", 189, $real2, $genre2);
$film4 = new Film("Les Misérables", "20-11-2019", 105, $real1, $genre1);

//Les différents acteurs pour les différents films
$act1 = new Acteur("Yun-Fat", "Chow", "H", "18-05-1955", $film1, $role1);
$act2 = new Acteur("Rooker", "Michael", "H", "06-04-1955", $film1, $role2);
$act3 = new Acteur("Owen", "Clive", "H", "03-10-1964", $film2, $role3);
$act4 = new Acteur("Gruffudd", "Ioan", "H", "06-10-1973", $film2, $role4);
$act5 = new Acteur("Lesaffre", "Sofia", "F", "01-04-1997", $film4, $role5);
$act6 = new Acteur("Balibar", "Jeanne", "H", "13-04-1968", $film4, $role6);
$act7 = new Acteur("Duncan", "Michael Clarke", "H", "10-12-1957", $film3, $role7);
$act8 = new Acteur("Hanks", "Tom", "H", "09-07-1956", $film3, $role8);

//Section casting
$cast1 = new Casting($film1, $act1, $role1);

echo $cast1->afficherCasting();

//Section résultat
// echo $real1->afficherFilmographie();
// echo $real2->afficherFilmographie();
// echo $real3->afficherFilmographie();

// echo $act3->afficherFilmographie();