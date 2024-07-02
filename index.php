<?php

require_once __DIR__ . "/models/Movie.php";

$newMovie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972, "Drammatico");
$newMovie2 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, "Thriller");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <main>
        <article>
            <?php 
            echo $newMovie1 -> getMovieInfo();            
            ?>
        </article>
        <article>
            <?php 
            echo $newMovie2 -> getMovieInfo();            
            ?>
        </article>
    </main>
</body>
</html>