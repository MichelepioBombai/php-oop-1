<?php 

class Movie {
    public $title;
    public $director;
    public $year;

    function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    
    public function GetMovies() {
        echo "Titolo: " . $this->title . "<br>";
        echo "Regista: " . $this->director . "<br>";
        echo "Anno di uscita: " . $this->year . "<br>";
    }
}

$movie1 = new Movie("Rush", "Ron Howard", 2013);
$movie2 = new Movie("Interstellar", "Christopher Nolan", 2014);



$movie1->GetMovies();
echo "<br>";
$movie2->GetMovies();