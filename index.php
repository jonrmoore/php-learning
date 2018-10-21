<?php

require 'functions.php';

try {
  $pdo = new PDO("mysql:host=127.0.0.1;dbname=myTodo", "root", "");
} catch (PDOException $e) {
  die("Could not connect");
}

$statement = $pdo->prepare('SELECT * FROM todos');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
// echo "<pre>"; var_dump($results[0]->description); echo "</pre>";

require 'index.view.php';