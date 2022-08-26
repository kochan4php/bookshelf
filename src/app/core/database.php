<?php

require_once __DIR__ . '/../../../load.php';

$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$database = $_ENV['DB_DATABASE'];
$password = $_ENV['DB_PASSWORD'];

$pdo_option =  [
  PDO::ATTR_PERSISTENT => true,
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$dsn = "mysql:host=$hostname;dbname=$database";
$pdo = new PDO($dsn, $username, $password, $pdo_option);
