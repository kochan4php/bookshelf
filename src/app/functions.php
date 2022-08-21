<?php

function convert_webp(): void
{
  $source = __DIR__ . '/../../storage/book-images/book.jpg';
  $destination = $source . '.webp';

  \WebPConvert\WebPConvert::convert($source, $destination, []);
}
