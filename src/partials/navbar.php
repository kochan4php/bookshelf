<nav class="navbar navbar-expand-lg text-light py-3">
  <div class="container">
    <a class="navbar-brand" href="index.php">Bookshelf</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon navbar-dark" style="color: white;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            List Buku
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="src/app/functions.php">Sudah dibaca</a></li>
            <li><a class="dropdown-item" href="">Belum dibaca</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" action="">
        <input class="form-control me-2" type="search" placeholder="Cari Buku" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>