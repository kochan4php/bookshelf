<?php

function uploadGambarBuku(): bool
{
  $filename = $_FILES['gambar_buku']['name'];
  $typefile = $_FILES['gambar_buku']['type'];
  $tmp = $_FILES['gambar_buku']['tmp_name'];
  $error = $_FILES['gambar_buku']['error'];
  $size = $_FILES['gambar_buku']['size'];

  $ext_image = ['jpg', 'png', 'webp', 'jpeg'];
  $typefile = explode('/', $typefile);
  $typefile = end($typefile);

  if (!in_array($typefile, $ext_image)) {
    echo 'Gambar tidak valid';
    return false;
  }

  if ($size > 2000000) {
    echo 'Ukuran gambar terlalu besar';
    return false;
  }

  if (!empty($error)) {
    echo 'Kesalahan pada upload gambar';
    return false;
  }

  if (move_uploaded_file($tmp, 'storage/book-images/' . $filename)) {
    return true;
  }
}
