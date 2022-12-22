<?php

class Acteur extends Personne
{
    private Film $_film;
    private Role $_role;
    private array $_castings;

    public function __construct($nom, $prenom, $sexe, $dateNaissance, Film $film, Role $role)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->_film = $film;
        $this->_role = $role;
        $role->addActeur($this); //ajout du rôle à l'acteur

        $this->_castings = [];
    }

    public function setFilm($film)
    {
        $this->_film = $film;
    }

    public function getFilm()
    {
        return $this->_film;
    }

    public function setRole($role)
    {
        $this->_role = $role;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function addCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    //fonction qui va afficher la filmographie d'un acteur 
    public function afficherFilmographie()
    {
        echo "<div><h4>Filmographie de l'acteur : " . $this->getPrenom() . " " . strtoupper($this->getNom()) . '</h4>';
        foreach ($this->_castings as $casting) {
            echo "<div>Film: " . $casting->getFilm() . ' (Rôle: ' . $casting->getRole() . ')' . "</div>"; //on récupère les infos du film ainsi que le rôle depuis le casting
        }
        echo "</div>";
    }

    public function __toString()
    {
        return $this->getPrenom() . ' ' . strtoupper($this->getNom());
    }
}
