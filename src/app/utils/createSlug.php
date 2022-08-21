<?php

function createSlug(string $string, string $separator = '-'): string
{
  $slug = htmlspecialchars($string);
  $slug = trim(strip_tags(stripslashes($slug)));
  $slug = strtolower($slug);
  $slug = explode(' ', $slug);
  $slug = implode($separator, $slug);
  return $slug;
}
