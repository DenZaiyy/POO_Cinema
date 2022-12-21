<?php

class Acteur extends Personne
{
    private Film $_film;
    private Role $_role;
    private array $_castings;
    private array $_filmographie;

    public function __construct($nom, $prenom, $sexe, $dateNaissance, Film $film, Role $role)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->_film = $film;
        $this->_role = $role;

        $this->_filmographie = [];
        $this->_castings = [];
    }

    public function setRole($role)
    {
        $this->_role = $role;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function addFilms(Film $film)
    {
        $this->_filmograpgie[] = $film;
    }

    public function addCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    public function afficherFilmographie()
    {
        echo "<div><h4>Filmographie de l'acteur : " . $this->getPrenom() . " " . strtoupper($this->getNom()) . '</h4>';
        foreach($this->_filmographie as $film) 
        {
            echo "<div>" . $film . "</div>";
        }
        echo "</div>";
    }

    public function __toString()
    {
        return $this->getPrenom() . ' ' . strtoupper($this->getNom());
    }
}