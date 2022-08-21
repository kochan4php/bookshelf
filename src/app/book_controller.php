<?php

function convert_webp(): void
{
  $source = __DIR__ . '/../../storage/book-images/book.jpg';
  $destination = $source . '.webp';

  \WebPConvert\WebPConvert::convert($source, $destination, []);
}

function getAllBooks(): array
{
  global $mysqli;

  $query = "SELECT * FROM books";
  $result = $mysqli->query($query)->fetch_all(MYSQLI_ASSOC);

  return $result;
}
