<?php

require __DIR__ . './Models/Genres.php';

require __DIR__ . './Models/Movie.php';


$matrix = new Movie('Matrix', 'bla bla bla', 'https://lorem', new Genres('Fantascienza', 'Azione', 'Avventura'));

$matrix->R_Rated_movie(18);

var_dump($matrix);

$aboutTime = new Movie('About Time', 'bla bla bla', 'https://ipsum', new Genres('Romantico', 'Commedia', null));

var_dump($aboutTime);
