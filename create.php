<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/init.php';
?>

<!-- require_once header -->
<?php require_once __DIR__ . '/src/partials/header.php'; ?>
<!-- require_once header -->

<!-- main -->
<div class="container my-4">
  <div class="row justify-content-center mb-3">
    <div class="col">
      <h2 class="text-center">Tambah buku baru</h2>
    </div>
  </div>

  <form>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="mb-3">
          <label for="gambar-buku" class="form-label">Gambar Buku</label>
          <input class="form-control" type="file" id="gambar-buku" name="gambar-buku">
        </div>
        <div class="mb-3">
          <label for="judul-buku" class="form-label">Judul Buku</label>
          <input type="text" class="form-control" id="judul-buku" name="judul-buku" placeholder="Judul Buku" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="penulis" class="form-label">Penulis</label>
          <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis Buku" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="jumlah-halaman" class="form-label">Jumlah halaman</label>
          <input type="number" class="form-control" id="jumlah-halaman" name="jumlah-halaman" placeholder="Jumlah halaman" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </div>
    </div>
  </form>
</div>
<!-- end main -->

<!-- require_once footer -->
<?php require_once __DIR__ . '/src/partials/footer.php' ?>
<!-- require_once footer -->