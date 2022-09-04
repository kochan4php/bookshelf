<?php

function getAllBookStatus(): array
{
  global $pdo;

  $query = "SELECT * FROM status_buku";
  $stmt = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

  return $stmt;
}
