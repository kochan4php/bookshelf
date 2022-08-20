<?php require_once __DIR__ . '/partials/header.php' ?>

<?php $image = 'storage/book-images/book.jpg' ?>

<!-- main -->
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Bookshelf</h1>
    </div>
  </div>

  <div>
    <table class="table table-striped mt-3 table-bordered border-gray bg-white rounded-1">
      <thead class="table-dark">
        <tr class="text-center">
          <th scope="col">No</th>
          <th scope="col">Gambar</th>
          <th scope="col">Judul</th>
          <th scope="col">Aksi</th>
          <th scope="col">Status Dibaca</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr class="text-center">
          <th scope="row">1</th>
          <td>
            <img src="<?= $image ?>" />
          </td>
          <td>Belajar pemrograman dasar dengan PHP</td>
          <td>
            <a href="" class="btn btn-info">
              <i class="bi bi-eye"></i>
            </a>
            <a href="" class="btn btn-success">
              <i class="bi bi-pencil-square"></i>
            </a>
            <a href="" class="btn btn-danger">
              <i class="bi bi-trash"></i>
            </a>
          </td>
          <td>Sudah</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end main -->

<?php require_once __DIR__ . '/partials/footer.php' ?>