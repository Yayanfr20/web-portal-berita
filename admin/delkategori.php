<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'sistem/delkategori.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
		<script>
		alert('Kategori berhasil dihapus');
		document.location.href = 'daftarkategori.php';
		</script>
	";
} else {
	echo "
		<script>
		alert('Kategori gagal dihapus');
			document.location.href = 'daftarkategori.php';
		</script>
	";
}




?>

