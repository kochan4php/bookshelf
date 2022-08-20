<nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-3">
  <div class="container">
    <a class="navbar-brand" href="index.php">Bookselft Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle btn btn-dark" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            List Buku
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="">Sudah dibaca</a></li>
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