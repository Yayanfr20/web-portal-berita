<?php
require 'admin/sistem/query.php';

$allnews = query("SELECT * FROM postingan");


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
<br>

<!-- news -->
<div class="container" style="width:80%;height:300px;margin-left:10%;">

<?php
include 'asset/include/news.php';
?>
</div>
<!-- end news -->
<br><br><br>
<!-- terkini -->
<h1 class="text-center mt-5">Berita terkini</h1>
<?php include 'asset/include/terkini.php'; ?>
<!-- end terkini -->


<script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>
</html>