<?php

class Genres
{
    public $genreOne;
    public $genreTwo;
    public $genreThree;

    function __construct($genreOne, $genreTwo, $genreThree)
    {
        $this->genreOne = $genreOne;
        $this->genreTwo = $genreTwo;
        $this->genreThree = $genreThree;
    }
}

class Movie
{
    public $title;
    public $description;
    public $link;

    function __construct($title, $description, $link, $genres)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->genres = $genres;
    }

    function R_Rated_movie($age)
    {
        if ($age > 17) {

            $granted = 'granted';
            return $this->access = $granted;
        }

        $denied = 'denied';
        return $this->access = $denied;
    }
}

$matrix = new Movie('Matrix', 'bla bla bla', 'https://lorem', new Genres('Fantascienza', 'Azione', 'Avventura'));

$matrix->R_Rated_movie(18);

var_dump($matrix);

$aboutTime = new Movie('About Time', 'bla bla bla', 'https://ipsum', new Genres('Romantico', 'Commedia', null));

var_dump($aboutTime);
