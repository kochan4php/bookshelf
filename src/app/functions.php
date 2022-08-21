<?php

use WebPConvert\WebPConvert;

function convert_webp(): void
{
  $source = __DIR__ . '/../../storage/book-images/book.jpg';
  $destination = $source . '.webp';

  WebPConvert::convert($source, $destination, []);
}
