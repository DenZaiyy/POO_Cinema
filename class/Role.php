<?php

class Role
{
    private string $_role;
    private array $_castings;
    private array $_acteurs;

    //Methode magique qui va permettre d'instancier un nouveau role de film
    public function __construct($role)
    {
        $this->_role = $role;
        $this->_castings = [];
        $this->_acteurs = [];
    }

    //Function qui va permettre d'ajouter le role dans le casting
    public function addCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    //Function qui va permettre d'ajouter le role à l'acteur
    public function addActeur(Acteur $acteur)
    {
        $this->_acteurs[] = $acteur;
    }

    //Fonction qui va afficher les acteurs ayant jouer un rôle précis
    public function afficherActeurs()
    {
        echo "<ul>";
        foreach ($this->_acteurs as $acteur) {
            echo "<li>" . $acteur . "</li>";
        }
        echo "</ul>";
    }

    //DEBUT - Setter / Getter de la classe Role
    public function setRole($role)
    {
        $this->_role = $role;
    }

    public function getRole()
    {
        return $this->_role;
    }
    //FIN - Setter / Getter de la classe Role

    //Methode magique qui va renvoyer par défaut la valeur du ROLE
    public function __toString()
    {
        return $this->getRole();
    }
}
