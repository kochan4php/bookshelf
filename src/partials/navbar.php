<?php if (isset($_POST['logout'])) logout(); ?>

<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Bookshelf</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="https://github.com/kochan4php/php-bookshelf-management" target="_blank">Github</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php if (!isset($_SESSION['isLoggedIn']) && !isset($_SESSION['email'])) : ?>
            <a class="nav-link text-white" href="login.php">Login</a>
          <?php endif ?>
          <?php if (isset($_SESSION['isLoggedIn']) && isset($_SESSION['email'])) : ?>
            <form method="POST">
              <button type="submit" name="logout" class="nav-link text-white btn border-0">Logout</button>
            </form>
          <?php endif ?>
        </li>
      </ul>
    </div>
  </div>
</nav>