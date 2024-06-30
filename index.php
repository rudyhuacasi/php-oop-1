<?php
class Movie
{
    public string $autore;
    public int $age;
    public array $listMovie = ['one piece', 'naruto'];
    public array $genere;
    public $metodo;

    public function __construct($autor, $genero, $anno, $list)
    {
        $this->autore = $autor;
        $this->age = $anno;
        $this->listMovie = $list;
        $this->genere = $genero;
    }

    public function getFullName()
    {
        $listMovieStr = implode(', ', $this->listMovie);
        $genereStr = implode(', ', $this->genere);

        return "Autore: " . $this->autore . '<br>' ."Anno: " . $this->age . '<br>' . "Lista di Film: " . $listMovieStr . '<br>' . "Generi: " . $genereStr . '<br>';    
    }

    public function error($autor, $genero, $anno, $list){
        if (!is_string($autor, $genero)) {
            throw new Exception("attenzione devi passare un numero");
        }
    }
}
$movie = new Movie('rudy',['horror', 'comedia'], 2024, ['one piece', 'naruto']);
echo $movie -> getFullName();
var_dump($movie);

$movie2 = new Movie('alex', ['horror', 'comedia'], 2024, ['one piece', 'naruto']);
echo $movie2->getFullName();
var_dump($movie2);

?>