<?php

class Role
{
    private string $_role;
    private array $_castings;
    private array $_acteurs;

    public function __construct($role)
    {
        $this->_role = $role;
        $this->_castings = [];
        $this->_acteurs = [];
    }

    public function addCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    public function addActeur(Acteur $acteur)
    {
        $this->_acteurs[] = $acteur;
    }

    //Fonction qui va afficher les acteurs ayant jouer un rôle précis
    public function afficherActeurs()
    {
        echo "<div>";
        echo 'Les acteurs ayant joué le rôle de "' . $this->getRole() . '" sont : ';
        foreach ($this->_acteurs as $acteur) {
            echo " " . $acteur . ",";
        }
        echo "</div>";
    }

    public function setRole($role)
    {
        $this->_role = $role;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function __toString()
    {
        return $this->getRole();
    }
}
