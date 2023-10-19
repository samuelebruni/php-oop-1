<?php

include __DIR__ . '/models.php';

$moviesList = [];

//creazione della classe moovie
class Movies
{
    public $titolo;
    public $genere;
    public $durata;

    function __construct($_titolo, $_genere, $_durata)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
    }

    public function getTitle()
    {
        return $this->titolo;
    }

};