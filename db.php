<?php

require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/TVSerie.php";

$shrek = new Movie('Shrek', 'English', 10, 260, 89);
$akira = new Movie('Akira', 'Japanese', 9, 3, 124);
$breakingbad = new TVSerie('Breaking Bad', 'English', 8, 5);
$goncharov = new Movie('Goncharov', 'English', 10, 500, 125);
$brooklyn99 = new TVSerie('Brooklyn 99', 'English', 9, 8);
$strangerthings = new TVSerie('Stranger Things', 'English', 6, 4);

$movies = [
    $shrek, $akira, $goncharov
];

$tv_series = [
    $breakingbad, $brooklyn99, $strangerthings
];

//var_dump($movies);
//var_dump($tv_series);