<?php
$keywordCari = $_GET['keywordCari'];
require 'admin/sistem/query.php';
$allkategori = query("SELECT * FROM kategori");

$allberita = query("SELECT * FROM postingan WHERE judul LIKE '%$keywordCari%' OR
deskripsi LIKE '%$keywordCari%' OR
kategori LIKE '%$keywordCari%' OR
tanggal_upload LIKE '%$keywordCari%'
");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cihuy News | cari</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!--  header  -->
    <?php include 'asset/include/header.php'; ?>
    <!-- end header -->
<br><br><br>
    <!-- berita -->
    <?php include 'asset/include/berita.php'; ?>
    <!-- end berita -->

<script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>