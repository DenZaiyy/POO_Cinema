<?php

class Casting
{

    private Role $_role;
    private Film $_film;
    private Acteur $_acteur;

    public function __construct(Film $film, Acteur $acteur, Role $role)
    {
        $this->_role = $role;
        $role->addCasting($this); //Ajoute le role dans le casting
        $this->_film = $film;
        $film->addCasting($this); //Ajoute le film dans le casting
        $this->_acteur = $acteur;
        $acteur->addCasting($this); //Ajoute l'acteur dans le casting
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
}
