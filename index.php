<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $genre;

    function __construct($title, $director, $year, $genre) {
        $this -> title = $title;
        $this -> director = $director;
        $this -> year = $year;
        $this -> genre = $genre;
    }

    public function getMovieInfo(){
        return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->year}, Genere: {$this->genre}";
    }
}

?>