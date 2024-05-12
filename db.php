<?php

require_once __DIR__ . "/Models/Production.php";

$shrek = new Production('Shrek', 'english', 10);
$akira = new Production('Akira', 'japanese', 9);
$breakingbad = new Production('Breaking Bad', 'english', 8);
$starwars = new Production('Star Wars', 'english', 7);
$goncharov = new Production('Goncharov', 'english', 10);
$brooklyn99 = new Production('Brooklyn 99', 'english', 9);

$productions = [
    $shrek, $akira, $breakingbad, $starwars, $goncharov, $brooklyn99
];

//var_dump($productions);