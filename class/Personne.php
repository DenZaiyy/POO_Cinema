<?php
class Personne
{
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private string $_dateNaissance;
    private Film $_film;
    private Genre $_genre;

    public function __construct($nom, $prenom, $sexe, $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = $dateNaissance;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setSexe($sexe)
    {
        $this->_sexe = $sexe;
    }

    public function getSexe()
    {
        if ($this->_sexe == 'H') {
            return "Homme";
        } else if ($this->_sexe == "F") {
            return "Femme";
        } else {
            return $this->_sexe;
        }
    }

    public function setDate($dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;
    }

    public function getDate()
    {
        return $this->_dateNaissance;
    }
}
