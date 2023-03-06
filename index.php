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

    public function printMovie()
    {
        echo '<h2>';
        echo 'TITOLO: ' . $this->title;
        echo '</h2>';

        echo '<h2>';
        echo 'GENERE: ' . $this->genere;
        echo '</h2>';

        echo '<h2>';
        echo 'DURATA: ' . $this->durata;
        echo '</h2>';

        echo '<h2>';
        echo 'ANNO: ' . $this->year;
        echo '</h2>';
    }
}

$dieHard = new Movie('Die Hard', 'Action', '3h', '1990');

var_dump($dieHard);

$dieHard->printMovie();

$jhonWick = new Movie('Jhon Wick 4', 'Action', '2h', '2023');

var_dump($jhonWick);

$jhonWick->printMovie();
