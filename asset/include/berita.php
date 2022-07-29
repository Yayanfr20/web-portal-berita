<div class="row d-flex justify-content-around">
<?php foreach($allberita as $berita) : ?>   
<div class="card mb-3" style="width: 18rem;background-color:#eaeaea;">
<a href="detailnews.php?id=<?= $berita['id']; ?>" style="text-decoration:none;">
  <img src="asset/img/<?= $berita['img']; ?>" class="card-img-top pt-4" alt="..." style="height:200px;">
  <div class="card-body">
    <p class="card-title" style="font-size:16px;"><?= $berita['judul']?></p>
    </a>
  </div>
  <div class="card-footer" style="background-color:#eaeaea;">
  <p class="card-text"><small class="text-muted"><?= $berita['tanggal_upload'];?></small></p>
  <p class="card-text"><small class="text-muted">Kategori : <?= $berita['kategori'];?></small></p>
  </div>
</div>
<?php endforeach; ?>
</div>
