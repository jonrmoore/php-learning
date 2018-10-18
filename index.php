<?php

require 'functions.php';

class Task {

  protected $description;

  protected $completed = false;

  public function __construct($description)
  {
    $this->description = $description;
  }

  public function complete() {
    $this->completed = true;
  }

  public function isComplete() {
    return $this->completed;
  }
}

$task = new Task("Go to the store");
$task->complete();

var_dump($task->isComplete());

$tasks = [
  new Task("Work on web portfolio"),
  new Task("Build a Laravel app"),
  new Task("Improve my SQL skills")
];

dd($tasks);

// dd($task);

// $greeting = "Hello, " . htmlspecialchars($_GET['name']) . ".";
// $favoriteAnimal = "Your favorite animal is a " . htmlspecialchars($_GET['animal']) . ".";

// $names = [
//   "Peter",
//   "Paul",
//   "Mary"
// ];

// // associative array
// $person = [
//   "name" => "Jon",
//   "age" => 28,
//   "career" => "web developer"
// ];

// // unset($person['age']);
// $person['hair-color'] = 'brown';

// $task = [
//   "title" => "Go on a run, you fat sack of snickers and beer",
//   "due" => "Today",
//   "assigned_to" => "me",
//   "completed" => true
// ];

// dd($task);

require 'index.view.php';