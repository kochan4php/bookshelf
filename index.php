<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/init.php';

$books = getAllBooks();

// if (!isset($_SESSION['islogin'])) header('Location: login.php');

if (isset($_GET['idbuku']) && isset($_GET['buku'])) deleteBook($_GET['idbuku']);

?>

<!-- require_once header -->
<?php require_once __DIR__ . '/src/partials/header.php'; ?>
<!-- require_once header -->

<!-- main -->
<div class="container my-4">
  <div class="row justify-content-between">
    <div class="col">
      <h1>Buku kamu</h1>
    </div>
    <div class="col d-flex justify-content-end align-items-center">
      <a href="create.php" class="btn btn-primary fw-medium btn-tambah">
        Tambah Buku
      </a>
    </div>
  </div>

  <div class="row">
    <div class="table-responsive">
      <table class="table mt-2 table-bordered border-gray bg-white rounded-1">
        <thead class="table-dark">
          <tr class="text-center">
            <th scope="col" class="text-nowrap">No</th>
            <th scope="col" class="text-nowrap">Gambar</th>
            <th scope="col" class="text-nowrap">Judul</th>
            <th scope="col" class="text-nowrap">Penulis</th>
            <th scope="col" class="text-nowrap">Genre Buku</th>
            <th scope="col" class="text-nowrap">Jumlah Halaman</th>
            <th scope="col" class="text-nowrap">Status Dibaca</th>
            <th scope="col" class="text-nowrap">Aksi</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php if (count($books) > 0) : ?>
            <?php $index = 1 ?>
            <?php foreach ($books as $book) : ?>
              <tr class="text-center">
                <th scope="row"><?= $index ?></th>
                <td>
                  <?php if ($book['gambar_buku']) : ?>
                    <img src="storage/book-images/<?= $book['gambar_buku'] ?>" width="80" />
                  <?php else : ?>
                    <img src="storage/no-image-available.webp" width="80" />
                  <?php endif ?>
                </td>
                <td><?= $book['judul_buku']; ?></td>
                <td><?= $book['penulis']; ?></td>
                <td><?= $book['nama_genre']; ?></td>
                <td><?= $book['jumlah_halaman']; ?></td>
                <td><?= $book['nama_status'] ?></td>
                <td class="d-flex gap-2 justify-content-center">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="detail.php?buku=<?= $book['slug'] ?>" class="btn btn-success btn-edit">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="edit.php?buku=<?= $book['slug'] ?>" class="btn btn-info btn-edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="index.php?idbuku=<?= $book['id_buku'] ?>&buku=<?= $book['slug'] ?>" class="btn btn-danger" onclick="return confirm('Hapus buku ini?')">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <?php $index++ ?>
            <?php endforeach ?>
          <?php else : ?>
            <tr>
              <td class="text-center" colspan="8">Kamu belum punya buku :(</td>
            </tr>
          <?php endif ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- end main -->

<!-- require_once footer -->
<?php require_once __DIR__ . '/src/partials/footer.php' ?>
<!-- require_once footer -->