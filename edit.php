<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/init.php';

$book = getBookBySlug($_GET['buku']);
$bookStatus = getAllBookStatus();
$bookGenre = getAllBookGenre();

?>

<!-- require_once header -->
<?php
$title = 'Edit Your Book';
require_once __DIR__ . '/src/partials/header.php';
?>
<!-- require_once header -->

<!-- main -->
<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">Edit buku</h2>
        </div>
        <div class="card-body">
          <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="gambar_buku" class="form-label">Gambar Buku</label>
              <input type="file" class="form-control" id="gambar_buku" name="gambar_buku" autocomplete="off">
            </div>
            <div class="mb-3">
              <label for="judul_buku" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" id="judul_buku" name="judul_buku" required autocomplete="off" placeholder="Masukkan judul buku" value="<?= $book['judul_buku'] ?>">
            </div>
            <div class="mb-3">
              <label for="penulis" class="form-label">Penulis</label>
              <input type="text" class="form-control" id="penulis" name="penulis" required autocomplete="off" placeholder="Masukkan penulis" value="<?= $book['penulis'] ?>">
            </div>
            <div class="mb-3">
              <label for="jumlah_halaman" class="form-label">Jumlah halaman</label>
              <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman" autocomplete="off" placeholder="Masukkan jumlah halaman" value="<?= $book['jumlah_halaman'] ?>">
            </div>
            <div class="mb-3">
              <label for="jumlah_halaman" class="form-label">Genre buku</label>
              <select class="form-select" name="genre_buku">
                <?php foreach ($bookGenre as $bg) : ?>
                  <?php if ($bg['id_genre'] == $book['genre_buku']) : ?>
                    <option value="<?= $bg['id_genre'] ?>" selected><?= $bg['nama_genre'] ?></option>
                  <?php else : ?>
                    <option value="<?= $bg['id_genre'] ?>"><?= $bg['nama_genre'] ?></option>
                  <?php endif ?>
                <?php endforeach ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="jumlah_halaman" class="form-label">Status dibaca</label>
              <select class="form-select" name="status_dibaca">
                <?php foreach ($bookStatus as $bs) : ?>
                  <?php if ($bs['id_status'] == $book['status_dibaca']) : ?>
                    <option value="<?= $bs['id_status'] ?>" selected><?= $bs['nama_status'] ?></option>
                  <?php else : ?>
                    <option value="<?= $bs['id_status'] ?>"><?= $bs['nama_status'] ?></option>
                  <?php endif ?>
                <?php endforeach ?>
              </select>
            </div>
            <div>
              <a href="index.php" type="button" class="btn btn-secondary">Batalkan</a>
              <button type="submit" class="btn btn-primary btn-tambah">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- main -->

<!-- require_once footer -->
<?php require_once __DIR__ . '/src/partials/footer.php' ?>
<!-- require_once footer -->