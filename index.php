<?php
require 'admin/sistem/query.php';
$id = count(query("SELECT * FROM postingan"));
$mulai = $id - 1;
$allnews = query("SELECT * FROM postingan LIMIT $mulai, 1");

$allberita = query("SELECT * FROM postingan LIMIT 0, $mulai");

$allkategori = query("SELECT * FROM kategori");


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cihuy news</title>
	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- header -->

<?php
include 'asset/include/header.php';
?>
<!-- end header -->
<br>
<!-- terkini -->
<h1 class="text-center mt-5">Berita terkini</h1>
<?php include 'asset/include/terkini.php'; ?>
<!-- end terkini -->

<!-- berita lainnya -->
<br>
<h2 class="text-center">Berita lainnya</h2>
<?php include 'asset/include/berita.php'; ?>
<!-- end berita lainnya -->

<script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>