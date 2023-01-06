<?php

class Acteur extends Personne
{
    private Film $_film;
    private Role $_role;
    private array $_castings;

    //Methode magique qui va permettre d'instancier un nouvel acteur à l'aide de la classe "Acteur" qui est l'extension de la classe "Personne"
    public function __construct($nom, $prenom, $sexe, $dateNaissance, Film $film, Role $role)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance); //Reprend les élements du construct parent (de la classe personne)
        $this->_film = $film;
        $this->_role = $role;
        $role->addActeur($this); //ajout du rôle à l'acteur

        $this->_castings = [];
    }

    //DEBUT - Setter Getter de la classe Acteur
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
    //FIN - Setter Getter de la classe Acteur

    //Function addCasting qui permet d'ajouter les acteurs dans le tableau (casting) 
    public function addCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    //fonction qui va afficher la filmographie d'un acteur 
    public function afficherFilmographie()
    {
        foreach ($this->_castings as $casting) {
            echo "<div>Film: " . $casting->getFilm() . ' (Rôle: ' . $casting->getRole() . ')' . "</div>"; //on récupère les infos du film ainsi que le rôle depuis le casting
        }
    }

    //Function magique tostring qui sera l'élement renvoyer par défaut
    public function __toString()
    {
        return $this->getPrenom() . ' ' . strtoupper($this->getNom());
    }
}
