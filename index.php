<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/init.php';

// if (!isset($_SESSION['islogin'])) header('Location: login.php');

if (isset($_GET['idbuku']) && isset($_GET['buku'])) deleteBook($_GET['idbuku']);

if (!empty($_POST)) insertBook($_POST);

$books = getAllBooks();
$bookStatus = getAllBookStatus();
$bookGenre = getAllBookGenre();

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
      <button class="btn btn-primary fw-medium" data-bs-toggle="modal" data-bs-target="#modal">
        Tambah Buku
      </button>
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
                    <a href="" class="btn btn-info">
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

<!-- modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Buku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="gambar_buku" class="form-label">Gambar Buku</label>
            <input type="file" class="form-control" id="gambar_buku" name="gambar_buku" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul_buku" name="judul_buku" required autocomplete="off" placeholder="Masukkan judul buku">
          </div>
          <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" required autocomplete="off" placeholder="Masukkan penulis">
          </div>
          <div class="mb-3">
            <label for="jumlah_halaman" class="form-label">Jumlah halaman</label>
            <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman" autocomplete="off" placeholder="Masukkan jumlah halaman">
          </div>
          <div class="mb-3">
            <label for="jumlah_halaman" class="form-label">Genre buku</label>
            <select class="form-select" name="genre_buku">
              <?php foreach ($bookGenre as $bg) : ?>
                <option value="<?= $bg['id_genre'] ?>"><?= $bg['nama_genre'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="jumlah_halaman" class="form-label">Status dibaca</label>
            <select class="form-select" name="status_dibaca">
              <?php foreach ($bookStatus as $bs) : ?>
                <option value="<?= $bs['id_status'] ?>"><?= $bs['nama_status'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- modal -->

<!-- require_once footer -->
<?php require_once __DIR__ . '/src/partials/footer.php' ?>
<!-- require_once footer -->