<?php

class Movie
{
    public $title;
    public $description;
    public $link;
    public $genres;

    function __construct($title, $description, $link, array $genres)
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
            return $granted;
        }

        $denied = 'denied';
        return $denied;
    }
}
