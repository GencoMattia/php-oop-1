<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $genres = [];

    function __construct($title, $director, $year, $genres) {
        $this -> title = $title;
        $this -> director = $director;
        $this -> year = $year;

        foreach($genres as $genre) {
            $this -> genres [] = new Genre($genre);
        };
    }

    public function getMovieInfo(){
        return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->year}, Genere: {$this->genre}";
    }
}

?>