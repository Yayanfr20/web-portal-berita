<nav class="navbar navbar-dark navbar-expand-lg bg-secondary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><span class="text-primary">Cihuy</span> <span class="text-danger">news</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">News</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori
          </a>
          <ul class="dropdown-menu">
            <?php foreach($allkategori as $kategori) : ?>
            <li><a class="dropdown-item" href="kategori.php?kategori=<?= $kategori['kategori']; ?>"><?= $kategori['kategori']; ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <?php endforeach;?>
          </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">About</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="cari.php">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keywordCari">
        <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
      </form>
    </div>
  </div>
</nav>