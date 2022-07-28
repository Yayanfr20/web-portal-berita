<?php
require 'config.php';


function hapus($id) {
    global $conn;
	mysqli_query($conn, "DELETE FROM kategori WHERE id = $id");
	return mysqli_affected_rows($conn);
}



?>