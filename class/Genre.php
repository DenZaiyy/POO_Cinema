<?php

class Genre
{
    private string $_cinematographie;
    private Film $_film;
    private Personne $_personne;

    public function __construct($cinematographie)
    {
        $this->_cinematographie = $cinematographie;
    }

    public function setCinematographie($cinematographie)
    {
        $this->_cinematographie = $cinematographie;
    }

    public function getCinematographie()
    {
        return $this->_cinematographie;
    }

    public function __toString()
    {
        return $this->getCinematographie();
    }
}
