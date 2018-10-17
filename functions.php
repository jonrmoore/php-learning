<?php

function dd ($data) {
  echo "<pre>";
    die(var_dump($data));
  echo "</pre";
}

function validate_age($age) {
  if ($age >= 21) {
    return true;
  }

  return false;
}