<?php

function upload_book_image()
{
  if (empty($_FILES)) return false;

  $filename = $_FILES['gambar_buku']['name'];
  $typefile = $_FILES['gambar_buku']['type'];
  $tmp = $_FILES['gambar_buku']['tmp_name'];
  $errorfile = $_FILES['gambar_buku']['error'];
  $size = $_FILES['gambar_buku']['size'];

  $ext_image = ['jpg', 'png', 'webp', 'jpeg'];
  $typefile = explode('/', $typefile);
  $typefile = strtolower(end($typefile));

  if (!in_array($typefile, $ext_image)) {
    echo '
      <script>
        alert("Gambar tidak valid")
      </script>
    ';
    return false;
  }

  if ($size > 2000000) {
    echo '
      <script>
        alert("Ukuran gambar terlalu besar")
      </script>
    ';
    return false;
  }

  if (!empty($errorfile)) {
    echo '
      <script>
        alert("Kesalahan pada upload gambar")
      </script>
    ';
    return false;
  }

  if (move_uploaded_file($tmp, 'storage/book-images/' . $filename)) return $filename;
}
