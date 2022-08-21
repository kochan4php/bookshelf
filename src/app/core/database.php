<?php

require_once __DIR__ . '/../../../load.php';

$mysqli = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

if ($mysqli->connect_errno) {
  echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
  exit();
}
