
<div class="container">
    <?php foreach($allnews as $news) : ?>   
        <div class="card mb-4" style="background-color:#eaeaea;">
            <a href="detailnews.php?id=<?= $news['id']; ?>" style="text-decoration:none;">
            <img src="asset/img/<?= $news['img']; ?>" class="card-img-top" alt="..." >
            <div class="card-body">
                <h5 class="card-title"><?= $news['judul'];?></h5>
                </a>
                <p class="card-text"><small class="text-muted"><?= $news['tanggal_upload'];?></small></p>
                <p class="card-text"><small class="text-muted">Kategori :<?= $news['kategori'];?></small></p>
                
            </div>
        </div>
    <?php endforeach;?>  
</div>
