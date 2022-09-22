<?php
    require_once __DIR__ . '/movie.php';

    $firstMovie = new Movie("Ritorno al Futuro", "Sci-fi/Commedia", 1985, "1h 56m");
    $secondMovie = new Movie("Il Grande Lebowski", "Commedia/Giallo", 1998, "1h 57m");
    $thirdMovie = new Movie("Paura e Delirio a Las Vegas", "Commedia/Avventura", 1998, "1h 58m");

    $firstMovie->getMovieInfo();
    $secondMovie->getMovieInfo();
    $thirdMovie->getMovieInfo();
?>