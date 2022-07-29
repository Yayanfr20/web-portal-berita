<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
require 'sistem/config.php';
require 'sistem/query.php';


$allkategori = query("SELECT * FROM kategori");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- header -->
    <?php include 'include/header.php' ?>
    <br>
    <h1 class="mt-5" style="text-decoration:underline;">Daftar kategori</h1>
    <!-- end header -->

    <!-- table -->
    <?php include 'include/tablekategori.php' ?>
    <!-- end table -->
    
    </div>
    


<script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../asset/sweetalert2/dist/sweetalert2.all.min.js"></script>


</body>
</html>