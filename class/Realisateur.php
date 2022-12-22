<?php

class Realisateur extends Personne
{

    private array $_filmographie;

    public function __construct($nom, $prenom, $sexe, $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->_filmographie = [];
    }

    public function addFilms(Film $film)
    {
        $this->_filmographie[] = $film;
    }

    //Fonction qui va afficher la filmographie du réalisateur
    public function afficherFilmographie()
    {
        echo "<div><h4>Filmographie du realisateur : " . $this->getPrenom() . " " . strtoupper($this->getNom()) . '</h4>';
        foreach ($this->_filmographie as $film) {
            echo "<div>" . $film->afficherFilmographie() . "</div>"; //$film->afficherFilmographie() correspond à la fonction afficherFilmographie dans la class Film
        }
        echo "</div>";
    }

    public function __toString()
    {
        return "<div><h2>Réalisateur:</h2><span><strong>Nom / Prénom:</strong> " . $this->getNom() . " " . $this->getPrenom() . "</span><br><span><strong>Sexe:</strong> " . $this->getSexe() . "</span><br><span><strong>Date de naissance:</strong> " . $this->getDate() . "</span></div>";
    }
}
