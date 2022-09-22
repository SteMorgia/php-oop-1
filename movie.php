<?php

    class Movie {
        public $title;
        public $genre;
        public $year;
        public $duration;


        public function __construct($title, $genre, $year, $duration)
        {
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
            $this->duration = $duration;
        }

        public function getMovieInfo() {
            echo $this->title . ' ' . $this->genre . ' ' . $this->year . ' durata film ' . $this->duration . '<br><br>';
        }
    }



?>