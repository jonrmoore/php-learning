<?php

$greeting = "Hello, " . htmlspecialchars($_GET['name']) . ".";
$favoriteAnimal = "Your favorite animal is a " . htmlspecialchars($_GET['animal']) . ".";

$names = [
  "Peter",
  "Paul",
  "Mary"
];

// associative array
$person = [
  "name" => "Jon",
  "age" => 28,
  "career" => "web developer"
];

unset($person['age']);
$person['hair-color'] = 'brown';

$task = [
  "title" => "Go on a run, you fat sack of snickers and beer",
  "due" => "Today",
  "assigned_to" => "me",
  "completed" => true
];

require 'index.view.php';