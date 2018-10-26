<?php

$query = require 'bootstrap.php';

require 'Task.php';
$tasks = $query->selectAll("todos");


// die(format(var_dump($tasks)));
// echo "<pre>"; die(var_dump($tasks)); echo "</pre>";
require 'index.view.php';