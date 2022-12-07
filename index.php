<?php

class Movie
{
    public $title;
    public $description;
    public $link;

    function __construct($title, $description, $link)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
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

$matrix = new Movie('Matrix', 'bla bla bla', 'https://lorem');

$matrix->R_Rated_movie(18);

var_dump($matrix);

$aboutTime = new Movie('About Time', 'bla bla bla', 'https://ipsum');

var_dump($aboutTime);
