<?php

class Genre
{
    private string $_genre;
    private array $_cinematographie;

    //Methode magique construct pour instancier un nouveau "Genre" de film
    public function __construct($genre)
    {
        $this->_genre = $genre;
        $this->_cinematographie = [];
    }

    //Function qui va ajouter le film au genre actuel
    public function addFilms(Film $film)
    {
        $this->_cinematographie[] = $film;
    }

    //Fonction qui va afficher la cinématographie d'un genre (indiquant les films qui ont le même genre de film)
    public function afficherCinematographie()
    {
        echo "<div>";
        echo 'Le genre "' . $this->getGenre() . '" est associé à ' . count($this->_cinematographie) . $this->checkNbFilms();
        foreach ($this->_cinematographie as $genre) {
            echo " " . $genre . ",";
        }
        echo "</div>";
    }

    //fonction qui permet de vérifier combien de film sont dans le genre sélectionner
    public function checkNbFilms()
    {
        if (count($this->_cinematographie) == 1) {
            return " film:";
        } else if (count($this->_cinematographie) > 1) {
            return " films:";
        }
    }

    //DEBUT - Setter / Getter de la classe Genre
    public function setGenre($genre)
    {
        $this->_genre = $genre;
    }

    public function getGenre()
    {
        return $this->_genre;
    }
    //FIN - Setter / Getter de la classe Genre

    //Methode magique qui renverra par défaut le genre
    public function __toString()
    {
        return $this->getGenre();
    }
}
