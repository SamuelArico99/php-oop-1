<?php

class Movie
{
    public $title;
    public $genere;
    public $durata;
    public $year;

    public function __construct($_title, $_genere, $_durata, $_year)
    {
        $this->title = $_title;
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->year = $_year;
    }
}

$dieHard = new Movie('Die Hard', 'Action', '3h', '1990');

var_dump($dieHard);
