<?php

require_once __DIR__ . "/Genre.php";
class Movie {
    public $title;
    public $director;
    public $year;
    public $genres;

    function __construct($title, $director, $year, $genres) {
        $this -> title = $title;
        $this -> director = $director;
        $this -> year = $year;
        $this -> genres = $genres;
    }

    public function getMovieInfo(){
        $implodedGenres = implode(", ", $this -> genres);
        return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->year}, Generi: {$implodedGenres}";
    }
}

?>