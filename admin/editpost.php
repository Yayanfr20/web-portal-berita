<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'sistem/query.php';
require 'sistem/editpost.php';
$allkategori = query("SELECT * FROM kategori");

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$post = query("SELECT * FROM postingan WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["posting"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
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
    <title>Edit Post</title>
	<link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!-- header -->
    <?php include 'include/header.php'; ?>
    <!-- end header -->
<br><br><br>
    <!-- form edit -->
	<?php include 'include/formedit.php' ?>
    <!-- end form edit -->


<script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>