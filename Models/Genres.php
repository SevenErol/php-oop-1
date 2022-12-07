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
