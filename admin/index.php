<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'sistem/config.php';
require 'sistem/query.php';

$jumlahkategori = count(query("SELECT * FROM kategori"));

$jumlahpostingan = count(query("SELECT * FROM postingan"));



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel | Cihuy News</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">

</head>
<body>
    <!-- header -->
    <?php include 'include/header.php' ?>
    <!-- end header -->

<br><br><br><br>
    <!-- news -->
    <?php include 'include/dashboard.php' ?>
    <!-- end news -->
<script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>