<?php

function getAllBookGenre(): array
{
  global $pdo;

  $query = "SELECT * FROM genre_buku";
  $stmt = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

  return $stmt;
}
