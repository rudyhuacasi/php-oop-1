<?php
require_once __DIR__.'/models/db.php';

$movie = new Movie('rudy',['horror', 'comedia'], 2024, ['one piece', 'naruto']);
echo $movie -> getFullName();
var_dump($movie);

$movie2 = new Movie('alex', ['horror', 'comedia'], 2024, ['one piece', 'naruto']);
echo $movie2->getFullName();
var_dump($movie2);

?>