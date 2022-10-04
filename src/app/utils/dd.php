<?php

function dd(mixed $value, array ...$values)
{
  var_dump($value, ...$values);
  die;
}
