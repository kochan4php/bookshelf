<?php

function createSlug(string $str, string $separator = '-'): string
{
  $slug = htmlspecialchars($str);
  $slug = trim($slug);
  $slug = strtolower($slug);
  $slug = explode(' ', $slug);
  $slug = implode($separator, $slug);
  return $slug;
}
