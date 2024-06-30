<?php

require_once __DIR__ . '/models/actor.php';


require_once __DIR__. '/models/db.php';


// Creazione di alcuni oggetti Actor
$actor1 = new Actor('Leonardo DiCaprio', 45);

// Creazione di un oggetto Movie
$movie = new Movie('alex', ['horror', 'comedia'], 2024, ['one piece', 'naruto'], [$actor1]);

// Aggiunta di un nuovo genere e attore
$movie->addGenere('thriller');
$movie->addActor(new Actor('Brad Pitt', 57));

echo $movie->getFullName();
echo '<br>';
echo 'Total Movies: ' . Movie::getTotalMovies();
var_dump($movie);
?>