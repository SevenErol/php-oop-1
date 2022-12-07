<?php

require __DIR__ . './Models/Genres.php';

require __DIR__ . './Models/Movie.php';

$MovieList = [
    'matrix' => new Movie('Matrix', 'bla bla bla', 'https://lorem', new Genres('Fantascienza', 'Azione', 'Avventura')),
    'about_time' => new Movie('About Time', 'bla bla bla', 'https://ipsum', new Genres('Romantico', 'Commedia', null)),
    'avatar' => new Movie('Avatar', 'bla bla bla', 'https://dolor', new Genres('Azione', 'Fantascienza', null))
];

header('Content-Type: application/json');
echo json_encode($MovieList);
