<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/init.php';

$book = null;
if (isset($_GET['book'])) {
  $book = getBookBySlug($_GET['book']);
}

var_dump($book);
?>


<!-- require_once header -->
<?php require_once __DIR__ . '/src/partials/header.php'; ?>
<!-- require_once header -->

<!-- main -->
<div class="container my-4">
</div>
<!-- end main -->

<!-- require_once footer -->
<?php require_once __DIR__ . '/src/partials/footer.php' ?>
<!-- require_once footer -->