<?php
require 'config.php';

function buatkategori($data) {
    global $conn;
    $kategori = htmlspecialchars($data['kategori']);

    $query = "INSERT INTO kategori VALUES ('', '$kategori')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


?>