<?php
require 'admin/sistem/query.php';
$keyword = $_GET['kategori'];
$allberita = query("SELECT * FROM postingan WHERE kategori LIKE '%$keyword%'");
$allkategori = query("SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cihuy news | kategori</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!-- header -->
    <?php include 'asset/include/header.php' ?>
    <!-- end header -->
<br><br><br>
    <h1 class="text-center">Kategori : <?= $keyword; ?></h1>
    <!-- berita -->
    <?php include 'asset/include/berita.php'; ?>
    <!-- endberita -->

    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>