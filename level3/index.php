<?php
declare(strict_types=1);

require_once 'classes/cinema.php';
require_once 'classes/movie.php';

//---------------------------------

function searchMovieDirector(array $cinemas, string $director): array {
    $films = [];

    foreach ($cinemas as $cinema) {
        foreach ($cinema->getMovies() as $movie) {
            if ($movie->getDirector() === $director && !in_array($movie, $films, true)) {
                $films[] = $movie;
            }
        }
    }

    return $films;
}

function showCinemaData(Cinema $cinema): void {
    echo $cinema->getInfo() . PHP_EOL;
    echo "The longest movie is:" . PHP_EOL . $cinema->getLongestMovie() . PHP_EOL;
}

function showMoviesByDirector(array $cinemas, string $director): void {
    echo "Movies directed by $director:" . PHP_EOL;
    $movies = searchMovieDirector($cinemas, $director);
    foreach ($movies as $movie) {
        echo $movie . PHP_EOL;
    }
}


//----------------------------------

$movie1 = new Movie ("Once upon a time in America" , 160 , "Sergio Leone");
$movie2 = new Movie ("Inception" , 120 , "Christopher Nolan");
$movie3 = new Movie ("Interstellar" , 130 , "Christopher Nolan");
$movie4 = new Movie ("Transformers" , 140 , "Michael Bay");

$movieList = [$movie1,$movie2,$movie3,$movie4];

$cinema1 = new Cinema ("Ideal" , "Turin" , $movieList);
$cinema2 = new Cinema ("The Space", "Turin", $movieList);

$cinemaList = [$cinema1,$cinema2];


showCinemaData($cinema1);
showCinemaData($cinema2);

showMoviesByDirector($cinemaList,"Christopher Nolan");



?>