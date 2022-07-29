<?php
$id = $_GET['id'];

require 'admin/sistem/query.php';

$berita = query("SELECT * FROM postingan WHERE id = $id")[0];
$allkategori = query("SELECT * FROM kategori");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $berita['judul']; ?> | Cihuy news</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- header -->
<?php include 'asset/include/header.php'; ?>
<!-- header -->
<br><br><br>
    <!-- berita -->
    <div class="container">
    <div class="card text-center">
        <div class="card-header">
        <?= $berita['tanggal_upload']; ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $berita['judul']; ?></h5>
            <img src="asset/img/<?= $berita['img']; ?>" class="card-img pt-4 pb-4" alt="..." style="height:300px;">
            <p class="card-text" style="text-align: justify;"><?= $berita['deskripsi']; ?></p>
        </div>
        <div class="card-footer text-muted">
            Kategori : <?= $berita['kategori']; ?>
        </div>
        </div> 
    </div>
    <!-- end berita -->


<script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>