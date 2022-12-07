<?php

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
