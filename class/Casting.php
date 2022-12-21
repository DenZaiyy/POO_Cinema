<?php

class Casting 
{

    private Role $_role;
    private Film $_film;
    private Acteur $_acteur;

    public function __construct(Film $film, Acteur $acteur, Role $role)
    {
        $this->_role = $role;
        $role->addCasting($this);
        $this->_film = $film;
        $film->addCasting($this);
        $this->_acteur = $acteur;
        $acteur->addFilms($film);
        $acteur->addCasting($this);
    }

    public function setFilm($film)
    {
        $this->_film = $film;
    }

    public function getFilm()
    {
        return $this->_film;
    }

    public function setActeur($acteur)
    {
        $this->_acteur = $acteur;
    }

    public function getActeur()
    {
        return $this->_acteur;
    }

    public function setRole($role)
    {
        $this->_role = $role;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function afficherCasting()
    {
        echo "<h4>Casting</h4>";
        echo "Film : " . $this->getFilm() . '<br>Acteur : ' . $this->getActeur() . '<br>Role : ' . $this->getRole();
    }
}