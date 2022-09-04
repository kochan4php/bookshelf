<?php

function getAllBooks(): array
{
  global $pdo;

  $query = "SELECT * FROM buku 
    INNER JOIN genre_buku ON buku.genre_buku = genre_buku.id_genre
    INNER JOIN status_buku ON buku.status_dibaca = status_buku.id_status";

  $stmt = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

  return $stmt;
}

function getBookBySlug($slug): array
{
  global $pdo;

  $slug = htmlspecialchars($slug);

  $query = "SELECT * FROM buku 
    INNER JOIN genre_buku ON buku.genre_buku = genre_buku.id_genre
    INNER JOIN status_buku ON buku.status_dibaca = status_buku.id_status 
    WHERE slug = :slug";

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
  $genreBuku = htmlspecialchars($data['genre_buku']);
  $statusDibaca = htmlspecialchars($data['status_dibaca']);

  $upload = $_FILES['gambar_buku']['name'] !== "" ? upload_book_image() : false;

  $query = "";

  if ($upload) {
    $query = "INSERT INTO buku VALUES (
      '', '$upload', :judul_buku, :slug, :penulis, :jumlah_halaman, :genre_buku, :status_dibaca, 1
    )";
  } else {
    $query = "INSERT INTO buku VALUES (
      '', NULL, :judul_buku, :slug, :penulis, :jumlah_halaman, :genre_buku, :status_dibaca, 1
    )";
  }

  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':judul_buku', $judulBuku);
  $stmt->bindParam(':slug', createSlug($judulBuku));
  $stmt->bindParam(':penulis', $penulis);
  $stmt->bindParam(':jumlah_halaman', $jumlahHalaman);
  $stmt->bindParam(':genre_buku', $genreBuku);
  $stmt->bindParam(':status_dibaca', $statusDibaca);
  $stmt->execute();

  if ($stmt->rowCount() > 0) header('Location: index.php');
}

function updateBook(): void
{
  // 
}

function deleteBook($id): void
{
  global $pdo;

  $book = getBookBySlug($_GET['buku']);
  unlink('storage/book-images/' . $book['gambar_buku']);

  $query = "DELETE FROM buku WHERE id_buku = :id";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  header('Location: index.php');
}
