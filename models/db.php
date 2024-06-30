<?php
// Definizione della classe Movie
class Movie
{
    public string $autore;
    public int $age;
    public array $listMovie;
    public array $genere;
    public array $actors;

    public static int $movieCount = 0;

    public function __construct($autor, $genero, $anno, $list, $actors = [])
    {
        $this->autore = $autor;
        $this->age = $anno;
        $this->listMovie = $list;
        $this->genere = $genero;
        $this->actors = $actors;
        self::$movieCount++;
    }

    // Setter per i generi, per gli attori, 
    public function setGeneri(array $genero)
    {
        $this->genere = $genero;
    }

    public function setActors(array $actors)
    {
        $this->actors = $actors;
    }

    // Metodo per aggiungere un nuovo genere
    public function addGenere(string $genere)
    {
        $this->genere[] = $genere;
    }

    // Metodo per aggiungere un nuovo attore
    public function addActor(Actor $actor)
    {
        $this->actors[] = $actor;
    }

    public function getFullName()
    {
        $listMovieStr = implode(', ', $this->listMovie);
        $genereStr = implode(', ', $this->genere);

        $actorsStr = '';
        foreach ($this->actors as $actor) {
            $actorsStr .= $actor->getActorInfo() . '<br>';
        }

        return "Autore: " . $this->autore . '<br>' .
            "Anno: " . $this->age . '<br>' .
            "Lista di Film: " . $listMovieStr . '<br>' .
            "Generi: " . $genereStr . '<br>' .
            "Attori: " . $actorsStr;
    }

    // Metodo statico per ottenere il numero totale di film
    public static function getTotalMovies()
    {
        return self::$movieCount;
    }
}

?>