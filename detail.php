<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/init.php';

$book = getBookBySlug($_GET['buku']);

?>

<!-- require_once header -->
<?php
$title = 'Book Detail';
require_once __DIR__ . '/src/partials/header.php';
?>
<!-- require_once header -->

<!-- main -->
<div class="container my-4"></div>
<!-- main -->

<!-- require_once footer -->
<?php require_once __DIR__ . '/src/partials/footer.php' ?>
<!-- require_once footer -->