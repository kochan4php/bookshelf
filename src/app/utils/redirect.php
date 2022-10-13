<?php

function redirect(string $path): void
{
  header('Location: ' . $path);
}
