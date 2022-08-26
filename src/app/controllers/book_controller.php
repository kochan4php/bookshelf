<?php

function convertWebp(): void
{
  $source = __DIR__ . '/../../storage/book-images/book.jpg';
  $destination = $source . '.webp';

  \WebPConvert\WebPConvert::convert($source, $destination, []);
}

function getAllBooks(): array
{
  global $pdo;

  $query = "SELECT * FROM buku INNER JOIN status_buku ON buku.status_dibaca = status_buku.id_status";
  $stmt = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

  return $stmt;
}

function getBookBySlug($slug): array
{
  global $pdo;

  $slug = htmlspecialchars($slug);

  $query = "SELECT * FROM buku INNER JOIN status_buku ON buku.status_dibaca = status_buku.id_status WHERE slug = :slug";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':slug', $slug);
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  return $result;
}

function insertBook($data): void
{
  global $pdo;

  $judulBuku = htmlspecialchars($data['judul_buku']);
  $penulis = htmlspecialchars($data['penulis']);
  $jumlahHalaman = htmlspecialchars($data['jumlah_halaman']);

  $upload = upload_book_image();

  $query = "";

  if ($upload) {
    $query = "INSERT INTO buku VALUES (
      '', '$upload', :judul_buku, :slug, :penulis, :jumlah_halaman, 'STS01'
    )";
  } else {
    $query = "INSERT INTO buku VALUES (
      '', NULL, :judul_buku, :slug, :penulis, :jumlah_halaman, 'STS01'
    )";
  }

  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':judul_buku', $judulBuku);
  $stmt->bindParam(':penulis', $penulis);
  $stmt->bindParam(':jumlah_halaman', $jumlahHalaman);
  $stmt->bindParam(':slug', createSlug($judulBuku));
  $stmt->execute();

  if ($stmt->rowCount() > 0) header('Location: index.php');
}

function deleteBook($id): void
{
  global $pdo;

  $query = "DELETE FROM buku WHERE id_buku = :id";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  header('Location: index.php');
}
