<?php

class Film
{
    private string $_title;
    private string $_date;
    private int $_duree;
    private Realisateur $_realisateur;
    private Acteur $_acteur;
    private Genre $_genre;
    private array $_castings;

    public function __construct($title, $date, $duree, Realisateur $realisateur, Genre $genre)
    {
        $this->_title = $title;
        $this->_date = $date;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $realisateur->addFilms($this);
        $this->_genre = $genre;

        $this->_castings = [];
    }

    public function addCasting(Casting $casting)
    {
        $this->_castings[] = $casting;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setDate($date)
    {
        $this->_date = $date;
    }

    public function getDate()
    {
        return $this->formaterDateFr($this->_date);
    }

    public function setDuree($duree)
    {
        $this->_duree = $duree;
    }

    public function getDuree()
    {
        return $this->_duree;
    }

    public function setRealisateur($realisateur) 
    {
        $this->_realisateur = $realisateur;
    }

    public function getRealisateur()
    {
        return $this->_realisateur;
    }

    public function setGenre(Genre $genre)
    {
        $this->_genre = $genre;
    }
   
    public function getGenre()
    {
        return $this->_genre;
    }

    function formaterDateFr($date)
    {
        $dateFormat = new IntlDateFormatter('fr_FR', IntlDateFormatter::GREGORIAN, IntlDateFormatter::NONE);
        $time = strtotime($date);
        return $dateFormat->format($time);
    }

    public function __toString()
    {
        return '<strong>Titre du film :</strong> ' . $this->getTitle() . '<br><strong>Date de sortie :</strong> ' . $this->getDate() . '<br><strong>Durée :</strong> ' . $this->getDuree() . 'min' . '<br><strong>Genre :</strong> ' . $this->getGenre() . '<br><br>';
    }
}
