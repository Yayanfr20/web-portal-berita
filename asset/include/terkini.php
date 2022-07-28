<div class="container d-flex justify-content-center flex-direction-column mt-5">
    <?php foreach($allnews as $news) : ?>
    <div class="card" style="width: 18rem;">
        <img src="asset/img/<?= $news['img']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $news['judul'];?></h5>
            <a href="#" class="btn btn-primary">read more</a>
        </div>
    </div>
    <?php endforeach;?>
</div>


