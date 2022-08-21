<?php

function createSlug(string $str): string
{
  $slug = htmlspecialchars($str);
  $slug = trim($slug);
  $slug = strtolower($slug);
  $slug = explode(' ', $slug);
  $slug = implode('-', $slug);
  return $slug;
}
