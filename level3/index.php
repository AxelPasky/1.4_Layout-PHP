<?php
declare(strict_types=1);

require_once 'classes/cinema.php';
require_once 'classes/movie.php';

//------------------------------------------------------

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

//----------------------------------

$movie1 = new Movie ("Once upon a time in America" , 160 , "Sergio Leone");
$movie2 = new Movie ("Inception" , 120 , "Christopher Nolan");
$movie3 = new Movie ("Interstellar" , 130 , "Christopher Nolan");
$movie4 = new Movie ("Transformers" , 140 , "Michael Bay");

$movieList = [$movie1,$movie2,$movie3,$movie4];

$cinema1 = new Cinema ("Ideal" , "Turin" , $movieList);
$cinema2 = new Cinema ("The Space", "Turin", $movieList);

$cinemaList = [$cinema1,$cinema2];


echo $cinema1->getInfo() . PHP_EOL;

echo "The longest movie is: " . PHP_EOL . $cinema1->getLongestMovie() . PHP_EOL;


echo "Movies directed by Christopher Nolan: " . PHP_EOL;
$moviesByDirector = searchMovieDirector($cinemaList, "Christopher Nolan");

foreach ($moviesByDirector as $movie) {
    echo $movie . PHP_EOL;
}

?>