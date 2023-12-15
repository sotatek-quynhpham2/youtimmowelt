<?php
include "../res/x5engine.php";

$val = $_GET['type'] ?? null;
$imPrivateArea = new imPrivateArea();
$logged = $imPrivateArea->whoIsLogged();
$ret = '';

if ($val !== null && $logged !== false) {
  switch ($val) {
    case 'first':
      $ret = $logged['firstname'];
      break;
    case 'last':
      $ret = $logged['lastname'];
      break;
    case 'first_last':
      $ret = $logged['firstname'] . " " . $logged['lastname'];
      break;
    case 'email':
      $ret = $logged['email'];
      break;
    default:
      break;
  }
}

echo $ret;
