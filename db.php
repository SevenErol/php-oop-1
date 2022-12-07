<?php

require __DIR__ . './Models/Genre.php';

require __DIR__ . './Models/Movie.php';

$MovieList = [
    'matrix' => new Movie('Matrix', 'bla bla bla', 'https://lorem', [new Genre('Fantascienza'), new Genre('Azione'), new Genre('Avventura')]),
    'about_time' => new Movie('About Time', 'bla bla bla', 'https://ipsum', [new Genre('Romantico'), new Genre('Commedia')]),
    'avatar' => new Movie('Avatar', 'bla bla bla', 'https://dolor', [new Genre('Fantascienza'), new Genre('Avventura')])
];

header('Content-Type: application/json');
echo json_encode($MovieList);
