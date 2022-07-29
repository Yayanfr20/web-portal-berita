<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'sistem/query.php';
require 'sistem/posting.php';
$allkategori = query("SELECT * FROM kategori");

if( isset($_POST['posting']) ) {
    if( posting($_POST) > 0 ) {
		echo "
			<script>
				alert('berhasil DIPOSTING!');
				document.location.href = 'daftarposting.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('gagal DIPOSTING!');
				document.location.href = 'daftarposting.php';
			</script>
		";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Kategori</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- header -->
    <?php include 'include/header.php' ?>
    <br>
    <h1 class="mt-5" style="text-decoration:underline;">Create Post</h1>
    <!-- end header -->

    <!-- form -->
    <br>
    <?php include 'include/inputpost.php'; ?>
    <!-- end form -->
    </div>
    


<script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../asset/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>
</html>