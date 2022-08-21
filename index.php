<?php
require_once 'vendor/autoload.php';
require_once __DIR__ . '/src/init.php';

$books = getAllBooks();
$image = 'storage/book-images/book.jpg.webp';

?>

<!-- require_once header -->
<?php require_once __DIR__ . '/src/partials/header.php'; ?>
<!-- require_once header -->

<!-- main -->
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Buku kamu</h1>
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
        <?php $index = 1 ?>
        <?php foreach ($books as $book) : ?>
          <tr class="text-center">
            <th scope="row"><?= $index ?></th>
            <td>
              <img src="<?= $image ?>" />
            </td>
            <td><?= $book['judul_buku']; ?></td>
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
          <?php $index++ ?>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
<!-- end main -->

<!-- require_once footer -->
<?php require_once __DIR__ . '/src/partials/footer.php' ?>
<!-- require_once footer -->