<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'sistem/delpost.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
		<script>
		alert('postingan berhasil dihapus');
		document.location.href = 'daftarposting.php';
		</script>
	";
} else {
	echo "
		<script>
		alert('postingan gagal dihapus');
			document.location.href = 'daftarposting.php';
		</script>
	";
}




?>